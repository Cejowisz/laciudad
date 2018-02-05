<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;
use App\Post;


class PagesComposer
{

    public function categoryAll(View $view)
    {
        $categories = Category::all();
        $view->with('categories', $categories);
    }

    public function trend(View $view)
    {
        $trends = Post::take(5)->orderBy('created_at', 'desc')->get();
        $view->with('trends', $trends);
    }
}