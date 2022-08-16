<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Config extends BaseModel
{
    use HasFactory;
	use SoftDeletes;

	// add protected guarded dates
	protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

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
