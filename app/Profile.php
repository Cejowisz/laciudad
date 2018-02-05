<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'bio',
        'description',
        'profile_pix',
        'address',
        'local',
        'state',
        'user_id',
        'vocation_id'
    ];
}
