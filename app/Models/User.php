<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Utilities\Cached;
use App\Traits\Models\Searchable;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends BaseModel implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable;
    use Authorizable;
    use CanResetPassword;
    use HasApiTokens;
    use Notifiable;
    use SoftDeletes;
    use Searchable;
    use hasFactory;

    protected $guarded       = ['created_at', 'updated_at', 'deleted_at'];
    protected $search_fields = ['name', 'email'];

    public const ROLE_ADMIN     = 'Admin';
    public const ROLE_MASTER    = 'Master';
    public const ROLE_DEVELOPER = 'Developer';

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

    /**
     * Define a relationship with the role model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Get if user isDeveloper.
     *
     * @return bool
     */
    public function isDeveloper()
    {
        return $this->hasRole(self::ROLE_DEVELOPER);
    }

    /**
     * get if user isDeveloper or is Master
     *
     * @return bool
     */
    public function isDeveloperOrIsMaster()
    {
        return $this->hasRole(self::ROLE_DEVELOPER) || $this->hasRole(self::ROLE_MASTER);
    }

    /**
     * Get if user hasRole
     *
     * @return bool
     */
    public function hasRole($role)
    {
        $result = Cached::get(
            'sys-user-has-role',
            [$this->id, $role],
            function () use ($role) {
                return $this->roles()->where('name', $role)->exists();
            },
            5
        );

        return $result->getData();
    }
}
