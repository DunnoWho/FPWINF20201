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
Route::get('/add', "MainController@add");
Route::post('/do-add', "MainController@doAdd");
Route::get("/email","MainController@previewEmail");
Route::get("/download/{id}","MainController@download");
