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

// Back 
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/panel' , 'App\Http\Controllers\BackController@home')->name('dashboard');
    Route::resource('posts', 'App\Http\Controllers\PostBackController');
    Route::get('/deleteposts/{id}', 'App\Http\Controllers\PostBackController@delete')->name('delete.posts');
});

// Front
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');
Route::get('/post', 'App\Http\Controllers\HomeController@post')->name('post');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
Route::get('/posts', 'App\Http\Controllers\PostController@getData')->name('post_get');



