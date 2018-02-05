<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;




class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id', 'asc')->paginate(10);

        return view('admin.posts.index')->withPosts($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the input field
        $this->validate($request, [
            'title'         =>  'required|max:255',
            'description'   =>  'required|max:50',
            'slug'          =>  'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id'   =>  'required|integer',
            'author'        =>  'required',
            'body'          =>  'required',
            'featured_image' => 'sometimes|image'
        ]);

        // store in the database
        $post = new Post;

        $post->title        = $request->title;
        $post->description        = $request->description;
        $post->slug         = $request->slug;
        $post->category_id  = $request->category_id;
        $post->author  = $request->author;
        $post->body         = $request->body;

        // Save Image
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . $image->getClientOriginalName();
            $path = $request->file('featured_image')->storeAs('posts', $filename);

            $post->featured_image = $path;
        }

        $post->save();

        $post->tags()->sync($request->tags, false);

        Session::flash('message', 'Post is successfully saved');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit')->withPost($post)->withCategories($categories)->withTags($tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the input field
        $post = Post::find($id);
        if ($request->input('slug') == $post->slug){ // no need to disturb server to validate slug if it was not edited
            $this->validate($request, [
                'title'         =>  'required|max:255',
                'description'   =>  'required|max:50',
                'category_id'   =>  'required|integer',
                'body'          =>  'required',
                'featured_image' => 'image'
            ]);
        }else{
            $this->validate($request, [
                'title'         =>  'required|max:255',
                'description'   =>  'required|max:50',
                'slug'          =>  'required|alpha_dash|min:5|max:255',
                'category_id'   =>  'required|integer',
                'body'          =>  'required',
                'featured_image' => 'image'
            ]);
        }


        // store in the database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        // Save Image
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalName();
            $path = $request->file('featured_image')->storeAs('posts', $filename);
            $oldFile = $post->featured_image;

            // Update the database
            $post->featured_image = $path;

            // Delete the old pic
            Storage::delete($oldFile);
        }

        $post->save();
        if(isset($request->tags)){
            $post->tags()->sync($request->tags); //not quite get this part
        }else{
            $post->tags()->sync([]);
        }

        Session::flash('success', 'Post is successfully saved');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        Storage::delete($post->featured_image);
        
        $post->delete();

        Session::flash('success', 'The post was successfully deleted');

        return redirect()->route('posts.index');
    }
}
