<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }



    protected $table = 'users';

    protected $fillable = [
        'name',
        'username',
        'phone_number',
        'email',
        'email_token',
        'password'];

    protected $hidden = [
        'password',
        'remember_token',
        'email_token'
    ];


}
