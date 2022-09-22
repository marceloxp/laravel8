<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BaseModel extends Model
{
    public function getCreatedAtAttribute($value)
    {
        return ($value) ? Carbon::parse($value)->format('d/m/Y H:i:s') : '';
    }
    public function getUpdatedAtAttribute($value)
    {
        return ($value) ? Carbon::parse($value)->format('d/m/Y H:i:s') : '';
    }
    public function getDeletedAtAttribute($value)
    {
        return ($value) ? Carbon::parse($value)->format('d/m/Y H:i:s') : '';
    }

    public static function getTableName()
    {
        $instanced_model = with(new static());
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
}
