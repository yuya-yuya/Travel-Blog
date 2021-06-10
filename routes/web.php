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

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{id}', 'UserController@show');

Route::middleware('auth')->group(function () {
    Route::post('/users/update/{id}', 'UserController@update')->name('users.update');
    Route::post('users/{id}/withdraw', 'UserController@withdraw')->name('users.withdraw');
    Route::get('/users/{id}/edit', 'UserController@edit');
    Route::get('users/{id}/unsubscribe', 'UserController@unsubscribe');
});

Route::get('/posts', 'PostController@index');


