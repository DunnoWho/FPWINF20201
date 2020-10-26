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

Route::get('/', "MainController@index");
Route::get('/admin', "MainController@admin");
Route::get('/login', "MainController@login");
Route::get('/err', "MainController@err");
Route::post('/do-login', "MainController@doLogin");
Route::get('/logout', "MainController@logout");
Route::get('/register', "MainController@register");
Route::post('/do-register', "MainController@doRegister");
