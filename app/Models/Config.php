<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Models\Searchable;

class Config extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    use Searchable;

    protected $dates   = ['created_at','updated_at','deleted_at'];
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    // add fillable fields
    protected $fillable = ['name', 'value', 'status'];

    // define Searchable fields
    protected $search_fields = ['name', 'value'];
}
