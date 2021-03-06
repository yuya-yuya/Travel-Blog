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
use App\Models\Genre;

Route::get('/', function () {
    $genres = Genre::all();

    return view('User.home', ['genres' => $genres]);
})->name('user.home.index');

Route::get('/about', function () {

    return view('User.about');
})->name('user.about');

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);


    // userルート
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/{id}', 'UserController@show')->name('users.show');
    Route::middleware('auth')->group(function () {
        Route::post('/users/update/{id}', 'UserController@update')->name('users.update');
        Route::post('users/{id}/withdraw', 'UserController@withdraw')->name('users.withdraw');
        Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
        Route::get('users/{id}/unsubscribe', 'UserController@unsubscribe')->name('users.unsubscribe');
    });

    // postルート
    Route::middleware('auth')->group(function () {
        Route::get('/posts/new', 'PostController@new')->name('posts.new');
        Route::post('/posts/create', 'PostController@create')->name('posts.create');
        Route::post('/posts/{id}/delete', 'PostController@delete')->name('posts.delete');
        Route::post('/posts/{id}/reply', 'PostController@reply')->name('posts.reply');
    });
    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
    Route::get('/posts/{id}/genreshow', 'PostController@genreshow')->name('posts.genreshow');
});



// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

        // AdminUserルート
        Route::get('/users', 'UserController@index')->name('users.index');
        Route::post('/users/update/{id}', 'UserController@update')->name('users.update');
        Route::post('users/{id}/withdraw', 'UserController@withdraw')->name('users.withdraw');
        Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
        Route::get('users/{id}/unsubscribe', 'UserController@unsubscribe')->name('users.unsubscribe');

        // genreルート
        Route::get('/genres', 'GenreController@index')->name('genres.index');
        Route::post('/genres/create', 'GenreController@create')->name('genres.create');
        Route::post('/genres/{id}/delete', 'GenreController@delete')->name('genres.delete');

        // citynameルート
        Route::get('citynames', 'CitynameController@index')->name('citynames.index');
        Route::post('citynames/create', 'CitynameController@create')->name('citynames.create');
        Route::post('citynames/{id}/delete', 'CitynameController@delete')->name('citynames.delete');

    });

});


