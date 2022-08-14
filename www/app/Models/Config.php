<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    // create static function validate
	public static function validate($request, $id = '')
	{
		$rules = 
		[
			'name'   => 'required|max:150',
			'value'  => 'required|max:255',
			'status' => 'required|in:Ativo,Inativo'
		];

		return Config::_validate($request, $rules, $id);
	}
}
