<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index()
    {
        // dd(Auth::guard('web')->user());
        return view("main.user");
    }

    public function admin()
    {
        if(Auth::guard('FAI')->user()->role === 0){
            return view("main.admin");
        }
        else{
            return redirect("/");
        }
    }

    public function login()
    {
        return view("main.login");
    }

    public function register()
    {
        return view("main.register");
    }

    public function logout()
    {
        Auth::guard("FAI")->logout();
        return redirect("/login");
    }

    public function err()
    {
        return view("main.429");
    }

    public function doLogin(Request $request)
    {
        $arr = [
            "username" => $request->username,
            "password" => $request->password,
        ];

        if (Auth::guard("FAI")->attempt($arr)) {
            session()->flash("success-login", true);
            return redirect("/");
        }

        $arr = [
            "email" => $request->username,
            "password" => $request->password,
        ];

        if (Auth::guard("FAI")->attempt($arr)) {
            session()->flash("success-login", true);
            return redirect("/");
        }

        session()->flash("invalid-login", true);
        $request->flashExcept(["password"]);
        return redirect("/login");

        // if (Auth::guard("dosen")->attempt($arr)) {
        //     //sukses login dosen
        // } else if (Auth::guard("mahasiswa")->attempt($arr)) {
        //     //sukses login mahasiswa
        // }
        // else{
        //     //gagal login dua2
        // }
    }

    public function doRegister(Request $request)
    {
        $account = new Account();
        $account->username = $request->username;
        $account->nama = $request->name;
        $account->email = $request->email;
        $account->role = $request->role;
        $account->password = Hash::make($request->password);
        $account->save();
        session()->flash("sukses-register", true);
        return redirect("/login");
    }
}
