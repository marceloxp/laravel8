<?php

namespace App\Traits\Models;

trait CodeTrait
{
    public static function bootCodeTrait()
    {
        self::creating(
            function ($model) {
                $model->code = self::getCode();
            }
        );
    }

    private static function getCode()
    {
        return generate_unique_code();
    }
}
