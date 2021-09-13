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

//Route::get('/profile', [App\Http\Controllers\profileController::class, 'index'])->name('home');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');

Route::PUT('/profile/update', 'App\Http\Controllers\ProfileController@update')->name('profile.update');