<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('users', 'UsersController');

Auth::routes();

// Admin
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

Route::get('/', 'HomeController@index')->name('home');

// Books
Route::get('books/create', 'BookController@index')->name('book.create');
Route::get('get-books', 'BookController@getBooks')->name('getBooks');
Route::get('bookCategory', 'BookController@bookCategory')->name('bookCategory');
Route::post('bookCategory', 'BookController@store')->name('bookStore');
Route::any('delete-book/{id}', 'BookController@destroy')->name('deleteBook');


// Profile
Route::get('profile/create', 'ProfileController@create')->name('profileCreate');


Route::get('how-it-works', 'HomeController@how')->name('how');
Route::get('contact', 'ContactController@contact')->name('contact');
Route::get('/verify-email/{token}', 'Auth\RegisterController@verify'); /* for sending email verification */
Route::post('contact', 'ContactController@storeContact')->name('postContact');

// Slider
Route::get('slider/list', ['uses' => 'SliderController@index', 'as' => 'slider.index' ]);
Route::get('slider', ['uses' => 'SliderController@create', 'as' => 'slider.create' ]);
Route::post('slider', ['uses' => 'SliderController@store', 'as' => 'slider.store' ]);
Route::get('slider/{id}/edit', ['uses' => 'SliderController@edit', 'as' => 'slider.edit' ]);
Route::put('slider/{id}', ['uses' => 'SliderController@update', 'as' => 'slider.update' ]);
Route::any('slider/{id}', ['uses' => 'SliderController@destroy', 'as' => 'slider.destroy' ]);

// Post
Route::resource('posts', 'PostsController');

// Categories
Route::resource('categories', 'CategoryController', ['except' =>  ['create']]);
Route::resource('tags', 'TagController', ['except' =>  ['create']]);

// Blog
Route::get('blog-category/{id}', ['as' => 'blog.category', 'uses' => 'BlogController@showCategory']);
Route::get('blog-tag/{id}', ['as' => 'blog.tag', 'uses' => 'BlogController@showTag']);
Route::get('/blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
Route::get('blog/{slug}', ['as' =>'blog.single', 'uses' => 'BlogController@single'])->where('slug', '[\w\d\-\_]+');

