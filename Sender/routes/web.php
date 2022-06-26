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

// Profile user
Route::get('me', [App\Http\Controllers\MeController::class, 'index']);
// Route::get('me', 'App\Http\Controllers\MeController');

// sender
Route::resource('sender', 'App\Http\Controllers\SenderController');
Route::get('Sender', 'App\Http\Controllers\SenderController@New')->name('new');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
