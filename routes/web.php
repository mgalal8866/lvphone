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

Route::resource('msaref','App\Http\Controllers\MsarefController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\profileController::class, 'index'])->name('profile');

//Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
Route::PUT('/profile/update', 'App\Http\Controllers\ProfileController@update')->name('profile.update');

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts');
Route::get('/posts/trashed', 'App\Http\Controllers\PostController@posttrashed')->name('posts.trashed');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::get('/posts/store', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::get('/posts/show/{slug}', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::get('/posts/edit/{id}', 'App\Http\Controllers\PostController@edit')->name('posts.edit');
Route::get('/posts/update/{id}', 'App\Http\Controllers\PostController@update')->name('posts.update');
Route::get('/posts/destroy/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');
Route::get('/posts/hdelete/{id}', 'App\Http\Controllers\PostController@hdelete')->name('posts.hdelete');
Route::get('/posts/restore/{id}', 'App\Http\Controllers\PostController@restore')->name('posts.restore');