<?php

namespace App\Utilities;

class Datasite
{
    public static $datasite = [];

    public static function add($name_or_variable, $value_or_null = null)
    {
        if (is_array($name_or_variable)) {
            self::$datasite = array_merge_recursive(self::$datasite, $name_or_variable);
        } else {
            self::$datasite[$name_or_variable] = $value_or_null;
        }
    }

    public static function get()
    {
        return self::$datasite;
    }

    public static function clear()
    {
        self::$datasite = [];
    }

    public static function getAsJson()
    {
        return json_encode(self::$datasite);
    }

    public static function getHtmlScript()
    {
        return '<script type="text/javascript">window.datasite = ' . self::getAsJson() . ';</script>';
    }
}
