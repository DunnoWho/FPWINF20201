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

Route::get('/', function(){
    return redirect("/mahasiswa");
});

Route::prefix('/mahasiswa')->group(function () {
    Route::get('/', "MahasiswaController@list");
    Route::get('/insert', "MahasiswaController@add");
    Route::get('/update/{nrp?}', "MahasiswaController@edit");
});

Route::get('/dosen', "DosenController@list");
