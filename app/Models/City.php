<?php

namespace App\Models;

use App\Http\Utilities\Cached;
use App\Http\Utilities\Result;

class City extends BaseModel
{
	protected $dates   = ['created_at','updated_at','deleted_at'];
	protected $guarded = ['created_at','updated_at','deleted_at'];

	public static function getByUf($p_uf)
	{
		$uf_id = \App\Models\State::getStateIdByUf($p_uf);
		if (!$uf_id)
		{
			return Result::undefined();
		}

		return Cached::get
		(
			'App\Models\City',
			['getByUf', $p_uf],
			function() use ($uf_id)
			{
				return \App\Models\City::select('id','name')->where('state_id', $uf_id)->get()->pluck('name','id')->toArray();
			}
		);
	}

	public function state()
	{
		return $this->hasOne(\App\Models\State::class, 'id', 'state_id');
	}

	public static function validate($request, $id = '')
	{
		$rules = 
		[
			'state_id'   => 'required',
			'name'       => 'required|max:150',
		];
		return Role::_validate($request, $rules, $id);
	}
}
