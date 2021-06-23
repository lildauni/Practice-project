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
Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/about', 'App\Http\Controllers\MainController@about');
Route::get('/rewiew', 'App\Http\Controllers\MainController@rewiew')->name('rewiew');
Route::post('/rewiew/check', 'App\Http\Controllers\MainController@rewiew_check');