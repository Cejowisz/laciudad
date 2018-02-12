<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocation extends Model
{
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    protected $table = 'vocations';

    protected $fillable = ['name'];

}
