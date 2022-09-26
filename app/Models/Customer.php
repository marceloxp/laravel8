<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $dates    = ['created_at','updated_at','deleted_at'];
    protected $guarded  = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['name', 'email', 'password', 'born_at', 'phone', 'zipcode', 'address', 'address_number', 'complement', 'neighborhood','state'];
}
