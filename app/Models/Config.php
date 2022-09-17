<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Models\Searchable;

class Config extends BaseModel
{
    use HasFactory;
	use SoftDeletes;
	use Searchable;

	protected $dates   = ['created_at','updated_at','deleted_at'];
	protected $guarded = ['created_at', 'updated_at', 'deleted_at'];
	
	// add fillable fields
	protected $fillable = ['name', 'value', 'status'];

	// define Searchable fields
	protected $search_fields = ['name', 'value'];

    // create static function validate
	public static function validate($request, $id = '')
	{
		$rules = 
		[
			'name' => 'required|max:255|unique:configs,name,' . $id . ',id,deleted_at,NULL',
			'value'  => 'required|max:255',
			'status' => 'required|in:Ativo,Inativo'
		];

		return Config::_validate($request, $rules, $id);
	}
}
