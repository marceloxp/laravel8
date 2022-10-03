<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Models\Searchable;

class Config extends BaseModel
{
    use SoftDeletes;
    use Searchable;

    protected $guarded       = ['created_at', 'updated_at', 'deleted_at'];
    protected $search_fields = ['name', 'value'];
}
