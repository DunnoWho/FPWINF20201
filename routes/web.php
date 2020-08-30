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
    return "saya ganteng";
});


// Route::get("/{asdf}", function($asdf){
//     return "$asdf";
// });

Route::get("/hello", function(){
    return "Hello World!";
});

Route::get('/wkwkwk', function(){
    $arr = array("nama" => "evan");
    dd($arr);
    //die dump
});

Route::get('/tesredirect', function () {
    return redirect("/hello");
 })->name("r");

Route::get('/tokped/{toko?}/{barang?}', function ($toko=null, $barang=null) {
    if(!$toko){
        //return redirect("https://google.com");
        return redirect()->route("r");
    }
     if($toko == "stts"){
         return "WOE STTS BUKAN TOKO!";
     }
     else{
        return "TOKO <h1>$toko</h1><br> dijual cepat $barang";
     }
});

Route::prefix('/jadwal')->group(function () {
    Route::get('/ajar', function () {
        return "jadwal ajar";
    });
    Route::get('/ruang', function () {
        return "jadwal ruang";
    });
    Route::get('/dosen', function () {
        return "jadwal dosen";
    });
});
