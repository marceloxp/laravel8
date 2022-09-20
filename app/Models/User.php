<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Utilities\Cached;
use App\Traits\Models\Searchable;
use App\Traits\Models\Admin;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends BaseModel implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    use Searchable, Admin;

    # TODO: Change Admin trait name

	protected $dates   = ['created_at','updated_at','deleted_at'];
	protected $guarded = ['created_at','updated_at','deleted_at'];

    protected $search_fields = ['name', 'email'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}

    // get if user isDeveloper
    public function isDeveloper()
    {
        return $this->hasRole('Developer');
    }

    // get if user isDeveloper or is Master
    public function isDeveloperOrIsMaster()
    {
        return $this->hasRole('Developer') || $this->hasRole('Master');
    }

    // get if user hasRole
    public function hasRole($role)
    {
        $result = Cached::get
        (
            'sys-user-hasRole',
            [$this->id, $role],
            function() use ($role)
            {
                return $this->roles()->where('name', $role)->exists();
            },
            5
        );

        return $result->getData();
    }
}
