<?php

namespace App\Models;

use App\Http\Utilities\Cached;
use App\Services\Result;

class State extends BaseModel
{
	protected $dates   = ['created_at','updated_at','deleted_at'];
	protected $guarded = ['created_at','updated_at','deleted_at'];

	// add fillable fields
	protected $fillable = ['name', 'uf'];

    public static function getStateIdByUf($p_uf)
	{
		try
		{
			$result = Cached::get
			(
				'App\Models\State',
				['getStateIdByUf', $p_uf],
				function() use ($p_uf)
				{
					$state = \App\Models\State::select('id')->where('uf', $p_uf)->first();
					return $state->id ?? false;
				}
			);

			return $result['data'] ?? false;
		}
		catch (\Exception $e)
		{
			return false;
		}
	}

    public static function getAll()
	{
		try
		{
			return Cached::get
			(
				'App\Models\State',
				'getAll',
				function()
				{
					return \App\Models\State::select('id','name')->pluck('name','id')->toArray();
				}
			);
		}
		catch (\Exception $e)
		{
			return Result::exception($e);
		}
	}
}
