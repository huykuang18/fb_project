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

Route::get('/','App\Http\Controllers\PageController@getIndex');

Route::get('login','App\Http\Controllers\PageController@getLogin');
Route::post('login','App\Http\Controllers\PageController@postLogin');
Route::get('logout','App\Http\Controllers\PageController@logout');