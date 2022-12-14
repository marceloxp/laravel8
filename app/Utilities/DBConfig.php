<?php

namespace App\Utilities;

use App\Models\Config;

class DBConfig
{
    public static function set($p_name, $p_value): bool
    {
        try {
            $config = Config::firstOrNew(['name' => $p_name]);
            $config->value = $p_value;
            return $config->save();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
}
