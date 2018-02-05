<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'pdf',
        'user_id',
        'book_category_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bookCategory()
    {
        return $this->belongsTo('App\BookCategory');
    }
}
