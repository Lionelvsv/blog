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

Auth::routes();

Route::get('/logout', 'HomeController@destroy');

Route::get('/home', 'PostsController@index')->name('home');

 Route::get('/posts/{post}', 'PostsController@show')->name('show');

Route::get('/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/getRequest', function(){
    if(Request::ajax()){
        return  'get Request has bene loaded';
    }
});

Route::get('/livesearch','searchController@liveSearch');        





 