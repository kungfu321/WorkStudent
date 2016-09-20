<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    protected $table = 'access_tokens';
    protected $fillable = ['facebook_token', 'google_token'];

//    public function User()
//    {
//        return $this->belongsTo('App\User', 'user_id');
//    }
}
