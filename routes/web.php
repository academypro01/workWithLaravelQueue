<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('App\Http\Controllers')->group(function () {
    Route::resource('posts', 'PostsController');
    Route::get('/update/view/{id}', 'PostsController@updateView');
    Route::get('/add/like/{id}', 'PostsController@addLike');
    Route::get('/add/dislike/{id}', 'PostsController@addDislike');
    Route::get('get/all/likes/{id}', 'PostsController@allLikes');
});
