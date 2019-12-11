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
    return view('welcome');
});

Route::get('/blogposts/', 'BlogPostController@index');

Route::get('/blogposts/{user}', function ($user) {
    return view('blogpost', ['blogpost' => $user]);
});

Route::get('users', 'UserController@index');

Route::get('users/{id}', 'UserController@show') -> name('users.show');

Route::get('create', 'UserController@create');

Route::get('comments', 'CommentController@index');

Route::get('comments/{id}', 'CommentController@show') -> name('comments.show');
