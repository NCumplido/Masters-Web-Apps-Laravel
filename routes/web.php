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
})
//->middleware('polite'); ->middleware('auth'); could also be appended
->name('home');

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

Route::get('/blogposts', 'BlogPostController@index')->name('blogposts.index');

Route::get('/blogposts/create', 'BlogPostController@create')->name('blogposts.create')->middleware('auth');

Route::post('/blogposts', 'BlogPostController@store')->name('blogposts.store')->middleware('auth');
                                    //********** Pay attention to ordering, /{id} 'd routes must come last */
Route::get('/blogposts/{id}/edit', 'BlogPostController@edit')->name('blogposts.edit');

Route::put('blogposts/{id}', function($id) { 
    //BlogPostController@update
});

Route::delete('blogposts/{id}', 'BlogPostController@destroy') ->name('blogposts.destroy');

//Route::get('/blogposts/{user}', function ($user) { return view('blogpost', ['blogpost' => $user]); }); This was for something?

Route::get('/blogposts/{id}', 'BlogPostController@show') -> name('blogposts.show');

                //******************************************Comments*************************************************

Route::get('comments', 'CommentController@index')->name('comments.index');

Route::get('/comments/create', 'CommentController@create')->name('comments.create')->middleware('auth');

Route::post('/comments', 'CommentController@store')->name('comments.store')->middleware('auth');

Route::get('/comments/{id}/edit', 'CommentController@edit')->name('comments.edit')->middleware('auth');

//Route::put('comments/{id}', function($id) { //CommentController@update});

Route::delete('comments/{id}', function($id) {
    //CommentController@delete
});

//Pass the blogpoost Id here
Route::get('comments/{id}', 'CommentController@show') -> name('comments.show');

                //******************************************Auth*************************************************

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


