<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class BaseModel extends Model
{
	public function getCreatedAtAttribute($value) { return ($value) ? Carbon::parse($value)->format('d/m/Y H:i:s') : ''; }
	public function getUpdatedAtAttribute($value) { return ($value) ? Carbon::parse($value)->format('d/m/Y H:i:s') : ''; }
	public function getDeletedAtAttribute($value) { return ($value) ? Carbon::parse($value)->format('d/m/Y H:i:s') : ''; }

	public static function getTableName()
	{
		$instanced_model = with(new static);
		$result = $instanced_model->getTable();
		unset($instanced_model);
		return $result;
	}

	/**
	 * Get comment from field "field_name" of current table model
	 * @param $field_name
	 * @return string
	 * 
	 */
	public static function getFieldComment($field_name)
	{
		return db_table_get_field_comment(self::getTableName(), $field_name);
	}

	// add comment to inform that this method returns a Illuminate\Support\Collection
	/**
	 * Get all fields of current table model
	 * @return \Illuminate\Support\Collection
	 */
	public static function getFieldsCaptions()
	{
		return db_table_get_fields_captions(self::getTableName());
	}

	# TODO: Separate below methods to a trait or utility class

	// create function to get default admin route names
	public static function getAdminRouteName($route)
	{
		if ($route === 'index') {
			$route = '';
		}
		// get Laravel singular name of current table model
		$singular_name = ucfirst(str_to_singular(strtolower(self::getTableName())));
		return sprintf('admin%s%s', $singular_name, ucfirst(strtolower($route)));
	}

	public static function getAdminPathByDotNotation($route)
	{
		// get Laravel singular name of current table model
		$singular_name = ucfirst(str_to_singular(strtolower(self::getTableName())));
		return sprintf('admin.%s.%s', strtolower($singular_name), strtolower($route));
	}

	public static function getAdminRouteByDotNotation($route)
	{
		// get Laravel singular name of current table model
		$singular_name = ucfirst(str_to_singular(strtolower(self::getTableName())));
		return route(self::getAdminPathByDotNotation($route));
	}

	// create function to get route of current table model
	public static function getAdminRouteByName($route)
	{
		return ($route === 'index') ? route(self::getAdminRouteName('')) : route(self::getAdminRouteName($route));
	}

	// create function to get default admin view path
	public static function getAdminViewPath($route)
	{
		$singular_name = str_to_singular(strtolower(self::getTableName()));
		return sprintf('admin.%s.%s', $singular_name, $route);
	}

}
