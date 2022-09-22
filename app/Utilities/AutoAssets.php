<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Route;

class AutoAssets
{
	/**
	 * Find and load the assets for the current route.
	 * 
	 * @param  string  $p_type
	 * @return void
	 */
	public static function print($p_type)
	{
		$auto_assets = [];
		$available_assets = [];
		$routename = Route::currentRouteName();
		if (!empty($routename))
		{
			if (strpos($routename, 'admin') === 0)
			{
				$asset_file     = sprintf('%s/admin/%s.%s', $p_type, $routename, $p_type);
				$asset_file_min = $asset_file;
			}
			else
			{
				$asset_file     = sprintf('%s/%s.%s', $p_type, $routename, $p_type);
				$asset_file_min = sprintf('%s/%s.min.%s', $p_type, $routename, $p_type);
			}
			if ((!env_is_local()) && file_exists(public_path($asset_file_min)))
			{
				$auto_assets[] = $asset_file_min;
			}
			elseif (file_exists(public_path($asset_file)))
			{
				$auto_assets[] = $asset_file;
			}
			else
			{
				$available_assets[] = $asset_file;
			}
		}

		foreach ($auto_assets as $asset)
		{
			echo ($p_type == 'js') ? javascript($asset) : css($asset) . PHP_EOL;
		}

		foreach ($available_assets as $asset)
		{
			echo sprintf('<!-- %s -->', $asset) . PHP_EOL;
		}
    }
}
