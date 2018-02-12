<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public function profiles()
    {
        return $this->belongsToMany('App\Profile');
    }

    protected $table = 'interests';

    protected $fillable = ['name'];
}
