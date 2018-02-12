<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function interests()
    {
        return $this->belongsToMany('App\Interest');
    }

    public function vocation()
    {
        return $this->belongsTo('App\Vocation');
    }

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
