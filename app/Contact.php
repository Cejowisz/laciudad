<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'company_name',
        'phone',
        'email',
        'how',
        'message',
    ];
}
