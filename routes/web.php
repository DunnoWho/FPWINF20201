<?php

use App\Account;
use App\Notifications\LinkVisited;
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

Route::get('/{pesan}', function ($pesan) {
    $account = Account::find(1);
    $account->notify(new LinkVisited($pesan));
    foreach ($account->notifications as $i) {
        echo "<h1>".$i->data['judul']."</h1>";
        echo "<p>".$i->data['isi']."</p>";
    }
    //return view('welcome');
});
