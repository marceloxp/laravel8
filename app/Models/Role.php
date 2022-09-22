<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends BaseModel
{
    use SoftDeletes;
    protected $dates    = ['created_at','updated_at','deleted_at'];
    protected $guarded  = ['created_at','updated_at','deleted_at'];
    protected $fillable = ['name', 'description', 'color'];

    /**
     * Define a relationship with the user model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
