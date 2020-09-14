<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function dd()
    {
        $countries = array();
        $awards = array();
        $accounts = array();
        dd(array(
            "countries" => $countries,
            "awards" => $awards,
            "accounts" => $accounts,
        ));
    }

    public function basic()
    {
        $countries = DB::select("select * from countries");
        $awards = array();
        $accounts = DB::table('accounts')
            ->select("accounts.id", "accounts.username", "accounts.join_date", "accounts.highscore", "countries.name AS country_name", "countries.code AS country_code")
            ->selectRaw("GROUP_CONCAT(awards.icon) as icons")
            ->selectRaw("GROUP_CONCAT(awards.color) as colors")
            ->join('countries', 'accounts.country_id', '=', 'countries.id')
            ->leftJoin("account_award", "accounts.id", "=", "account_award.account_id")
            ->leftJoin("awards", "awards.id", "=", "account_award.award_id")
            ->groupBy("accounts.id", "accounts.username", "accounts.join_date", "accounts.highscore", "countries.name", "countries.code")
            ->get();
        return view("main.basic", array(
            "countries" => $countries,
            "awards" => $awards,
            "accounts" => $accounts,
        ));
    }
}
