<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function registerPage()
    {
        return view("register");
    }

    public function doRegister(Request $request)
    {
        //load array dari cookie
        $cookie = Cookie::get("users", "[]");
        $arrUser = json_decode($cookie, true);
        //buat data user baru
        $user = array(
            "nama" => $request->input("nama"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        );
        //tambahkan data user baru ke dalam array
        $arrUser[] = $user;
        //simpan array dalam cookie
        $cookie = json_encode($arrUser);
        Cookie::queue("users", $cookie, 60);
        //cek sukses atau enggak
        //dd(Cookie::get("users", "[]"));
        return Cookie::get("users", "[]");
    }
}
