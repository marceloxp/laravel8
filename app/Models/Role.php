<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends BaseModel
{
    use SoftDeletes;
    protected $dates    = ['created_at','updated_at','deleted_at'];
    protected $guarded  = ['created_at','updated_at','deleted_at'];
    protected $fillable = ['name', 'description', 'color'];

    public static function getColorBg($p_color_name)
    {
        $colors = config('colors.bg');

        if (array_key_exists($p_color_name, $colors)) {
            return $colors[$p_color_name];
        }
        return $p_color_name;
    }

    public static function getColorByRole($p_role_name)
    {
        $result = Role::select('color')->where('name', $p_role_name)->first();
        return ($result->color ?? 'Vermelho');
    }

    public static function getBgColorByRole($p_role_name)
    {
        $register = Role::select('color')->where('name', $p_role_name)->first();
        $color_name = ($register->color ?? 'Vermelho');
        return Role::getColorBg($color_name);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public static function ajustCollectionRolesColor($p_collection)
    {
        $p_collection->transform(
            function ($role, $key) {
                $role['color'] = Role::getBgColorByRole($role['name']);
                return $role;
            }
        );
        return $p_collection;
    }
}
