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

                //******************************************Home*************************************************

//Lecture 10 23:00 for route types

Route::get('/', function () { 
    return view('welcome'); 
})->name('home');

                //******************************************Users*************************************************

Route::get('/users', 'UserController@index')->name('users.index');

Route::get('/users/create', 'UserController@create')->name('users.create');

Route::post('/users', 'UserController@store')->name('users.store');

Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');

Route::put('users/{id}', function($id) { 
    //UserController@update
});

Route::delete('users/{id}', function($id) {
    //UserController@delete
});

Route::get('/users/{id}', 'UserController@show') -> name('users.show');

                //******************************************BlogPosts*************************************************

Route::get('/blogposts/', 'BlogPostController@index')->name('blogposts.index');

Route::get('/blogposts/{user}', function ($user) {
    return view('blogpost', ['blogpost' => $user]);
});

Route::get('/blogposts/{id}', 'BlogPostController@show') -> name('blogposts.show');

                //******************************************Comments*************************************************

Route::get('comments', 'CommentController@index')->name('comments.index');

Route::get('comments/{id}', 'CommentController@show') -> name('comments.show');
