<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        return view('blog.index')->withPosts($posts);
    }
    
    public function single($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        
        return view('blog.single')->withPost($post);
    }

    // For category page
    public function showCategory($id)
    {
        $category = Category::find($id);
        return view('blog.category')->withCategory($category);
    }

    // For Tag page
    public function showTag($id)
    {
        $tag = Tag::find($id);
        return view('blog.tag')->withTag($tag);
    }
}
