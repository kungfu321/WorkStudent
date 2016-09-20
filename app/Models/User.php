<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'facebook_id', 'google_id', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function AccessToken()
    {
        return $this->hasOne('App\Models\AccessToken', 'user_id');
    }

    public function Post()
    {
        return $this->hasMany('App\Models\Post', 'user_id');
    }

    public function Company()
    {
        return $this->hasOne('App\Models\Company', 'user_id');
    }

    public function JobUser()
    {
        return $this->belongsToMany('App\Models\Employer\Post');
    }
}
