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
    session()->reflash();
    return redirect("/basic");
});

Route::get('/login', "MainController@loginPage");
Route::post('/do-login', "MainController@doLogin");
Route::get('/logout', "MainController@logout");

Route::get('/dd', "MainController@dd");
Route::get('/basic', "MainController@basic");

Route::prefix('/accounts')->group(function () {
    Route::get('/', "AccountController@index");
    Route::get('/create', "AccountController@create");
    Route::post('/store', "AccountController@store");
    Route::get('/edit/{id?}', "AccountController@edit");
    Route::post('/update/{id?}', "AccountController@update");
    Route::get('/destroy/{id?}', "AccountController@destroy");
});

Route::prefix('/awards')->group(function () {
    Route::get('/', "AwardController@index");
    Route::get('/create', "AwardController@create");
    Route::post('/store', "AwardController@store");
    Route::get('/edit/{id?}', "AwardController@edit");
    Route::post('/update/{id?}', "AwardController@update");
    Route::get('/destroy/{id?}', "AwardController@destroy");
});

Route::prefix('/countries')->group(function () {
    Route::get('/', "CountryController@index");
    Route::get('/create', "CountryController@create");
    Route::post('/store', "CountryController@store");
    Route::get('/edit/{id?}', "CountryController@edit");
    Route::post('/update/{id?}', "CountryController@update");
    Route::get('/destroy/{id?}', "CountryController@destroy");
});
