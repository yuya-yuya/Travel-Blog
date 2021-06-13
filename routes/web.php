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

use App\Http\Controllers\GenreController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// userルート
Route::get('/users/{id}', 'UserController@show');
Route::middleware('auth')->group(function () {
    Route::post('/users/update/{id}', 'UserController@update')->name('users.update');
    Route::post('users/{id}/withdraw', 'UserController@withdraw')->name('users.withdraw');
    Route::get('/users/{id}/edit', 'UserController@edit');
    Route::get('users/{id}/unsubscribe', 'UserController@unsubscribe');
});

// postルート
Route::middleware('auth')->group(function () {
    Route::get('/posts/new', 'PostController@new')->name('posts.new');
    Route::post('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts/{id}/delete', 'PostController@delete')->name('posts.delete');
});
Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show')->name('users.show');

// citynameルート
Route::get('/citynames', 'CitynameController@index');
Route::post('/citynames/create', 'CitynameController@create')->name('citynames.create');
Route::post('citynames/{id}/delete', 'CitynameController@delete')->name('citynames.delete');

// genreルート
Route::get('/genres', 'GenreController@index');
Route::post('/genres/create', 'GenreController@create')->name('genres.create');
Route::post('/genres/{id}/delete', 'GenreController@delete')->name('genres.delete');


