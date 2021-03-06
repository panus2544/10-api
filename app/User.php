<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'provider_id'
    ];

    public function user_roles()
    {
        return $this->hasMany('App\Models\UserRole');
    }

    public function provider_users()
    {
        return $this->hasMany('App\Models\ProviderUser');
    }

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function evals()
    {
        return $this->hasMany('App\Models\Evals', 'checker_id');
    }

    public function problems()
    {
        return $this->hasMany('App\Models\Problem');
    }

    public function assigns()
    {
        return $this->hasMany('App\Models\Assign');
    }

    public function user_role_teams()
    {
        return $this->hasMany('App\Models\UserRoleTeam');
    }

    public function timetables()
    {
        return $this->hasMany('App\Models\Timetable');
    }

    public function announces()
    {
        return $this->hasMany('App\Models\Announce');
    }

    public function expo_tokens()
    {
        return $this->hasMany('App\Models\ExpoToken');
    }

    public function notificaions()
    {
        return $this->hasMany('App\Models\Notification');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
