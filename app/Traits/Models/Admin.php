<?php

namespace App\Traits\Models;

trait Admin
{
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
