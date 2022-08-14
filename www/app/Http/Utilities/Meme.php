<?php

namespace App\Http\Utilities;

use App\Http\Utilities\Result;
use Intervention\Image\Facades\Image;

class Meme
{
	public static function saveFake($p_image, $p_theme_id, $customer_id, $influencer_id, $p_status, $p_created_at = null)
	{
		$p_created_at = $p_created_at ?? \Carbon\Carbon::now();
		$image_code   = generate_unique_code();
		$folder       = public_path('/memes');
		$image_name   = sprintf('/memes/%s.jpg', $image_code);
		$dest         = public_path($image_name);

		$i_slug = \App\Models\Influencer::find($influencer_id)->slug;
		$image  = Image::make($p_image);
		$border = Image::make(public_path(sprintf('/images/influencers/borders/%s.png', $i_slug)));
		$border->resize($image->width(), $image->height());
		$image->insert($border);
		$status = ($p_status != 'random') ? $p_status : collect(['Aprovado','Aprovado','Aprovado','Aprovado','Aprovado','Aprovado','Aprovado','Aprovado','Aprovado','Aprovado','Reprovado'])->random(1)->first();

		if (!\File::isDirectory($folder)) { \File::makeDirectory($folder, 0777, true, true); }
		$image->save($dest, 70);

		$data = 
		[
			'name'          => $image_name,
			'code'          => $image_code,
			'status'        => $status,
			'theme_id'      => $p_theme_id,
			'influencer_id' => $influencer_id,
			'customer_id'   => $customer_id,
			'created_at'    => $p_created_at,
			'updated_at'    => $p_created_at
		];
		$meme = \App\Models\Meme::create($data);
		$meme = \App\Models\Meme::find($meme->id);

		$theme = \App\Models\Theme::find($p_theme_id);
		switch ($theme->fase)
		{
			case '0':
			case '1':
				$game_vote = \App\Models\Game1vote::class;
			break;
			case '2':
				$game_vote = \App\Models\Game2vote::class;
			break;
			case '3':
				$game_vote = \App\Models\Game3vote::class;
			break;
			case '4':
				$game_vote = \App\Models\Game4vote::class;
			break;
		}

		$votes = rand(0, 3);
		for($k = 0; $k < $votes; $k++)
		{
			$game_vote::vote($meme->code, $meme->id);
		}

		$meme = \App\Models\Meme::find($meme->id);

		return Result::success
		(
			'Seu Meme foi gerado com sucesso!',
			[
				'code' => $image_code,
				'path' => url($image_name),
				'meme' => $meme
			]
		);
	}

	public static function fakeSaveRandom($p_created_at = null)
	{
		$p_created_at = $p_created_at ?? \Carbon\Carbon::now();
		$customer = \App\Models\Customer::loopNext();
		return self::saveFake
		(
			collect(\File::files('/home/umstudio/git/job5118_guarana_antarctica_memes_sa/imagens/examples/'))->random()->getRealPath(),
			get_theme_of_day($p_created_at)->id,
			$customer->id,
			$customer->influencer_id,
			'random',
			$p_created_at
		);
	}

	// \App\Http\Utilities\Meme::fakeSaveRandomByCustomer(\App\Models\Customer::byEmail('marceloxp@gmail.com')->first()->id);
	// \App\Http\Utilities\Meme::fakeSaveRandomByCustomer(\App\Models\Customer::byEmail('nicole67@ig.com.br')->first()->id);
	// \App\Http\Utilities\Meme::fakeSaveRandomByCustomer(\App\Models\Customer::byEmail('jferraz@gmail.com')->first()->id);
	// \App\Http\Utilities\Meme::fakeSaveRandomByCustomer(\App\Models\Customer::byEmail('uleon@yahoo.com')->first()->id);
	public static function fakeSaveRandomByCustomer($p_customer_id, $p_created_at = null, $p_theme_id = null)
	{
		$p_created_at = $p_created_at ?? \Carbon\Carbon::now();
		$customer = \App\Models\Customer::find($p_customer_id);
		$theme_id = (!empty($p_theme_id)) ? $p_theme_id : get_theme_of_day($p_created_at)->id;
		$result = self::saveFake
		(
			collect(\File::files('/home/umstudio/git/job5118_guarana_antarctica_memes_sa/imagens/examples/'))->random()->getRealPath(),
			$theme_id,
			$customer->id,
			$customer->influencer_id,
			'Aprovado',
			$p_created_at
		);
		return $result;
	}
}