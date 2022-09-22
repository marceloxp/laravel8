<?php
if (!function_exists('admin_sidebar_active'))
{
	function admin_sidebar_active($path)
	{
		$route_path = Route::current()->uri();
		if (strpos($route_path, 'admin/' . $path) !== false)
		{
			return 'active';
		}
		return '';
	}
}
