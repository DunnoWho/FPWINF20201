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

use App\Http\Middleware\IsLoggedInMiddleware;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Middleware\LoggingMiddleware;
use App\Http\Middleware\RateLimitMiddleware;

Route::get('/', "MainController@index")->middleware("myMiddleWare");
Route::get('/admin', "MainController@admin")
    ->middleware([
        "myMiddleWare",
        IsAdminMiddleware::class,
    ]);
Route::get('/login', "MainController@login");
Route::get('/err', "MainController@err");
Route::post('/do-login', "MainController@doLogin");
Route::get('/logout', "MainController@logout")->middleware("myMiddleWare");
Route::get('/asdf', function(){
    return "";
})->middleware("a:a,b,c,d,e,f,g");
