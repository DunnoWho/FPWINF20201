<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Account;
use App\Level;
use App\RequestLog;

class MainController extends Controller
{
    public function index()
    {
        return view("main.user");
    }

    public function admin()
    {
        return view("main.admin");
    }

    public function login()
    {
        if (session("user")) {
            return redirect("/");
        } else {
            return view("main.login");
        }
    }

    public function logout()
    {
        session()->forget("user");
        return redirect("/login");
    }

    public function err()
    {
        return view("main.429");
    }

    public function doLogin(Request $request)
    {
        // dd($request->input());
        $user = Account::where("username", $request->input("username"))
            ->where("password", $request->input("password"))
            ->first();
        if ($user) {
            session()->flash("success-login", true);
            session(["user" => array(
                "id" => $user->id,
                "username" => $user->username,
                "level_id" => $user->level_id,
            )]);
            return redirect("/");
        } else {
            session()->flash("invalid-login", true);
            $request->flashExcept(["password"]);
            return redirect("/login");
        }
    }
}
