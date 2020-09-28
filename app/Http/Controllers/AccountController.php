<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Account;
use App\Award;
use App\Country;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::all();
        $awards = Award::all();
        $accounts = Account::select("accounts.id", "accounts.username", "accounts.join_date", "accounts.highscore", "countries.name AS country_name", "countries.code AS country_code")
            ->selectRaw("GROUP_CONCAT(awards.icon) as icons")
            ->selectRaw("GROUP_CONCAT(awards.color) as colors")
            ->join('countries', 'accounts.country_id', '=', 'countries.id')
            ->leftJoin("account_award", "accounts.id", "=", "account_award.account_id")
            ->leftJoin("awards", "awards.id", "=", "account_award.award_id")
            ->groupBy("accounts.id", "accounts.username", "accounts.join_date", "accounts.highscore", "countries.name", "countries.code")
            ->get();
        return view("accounts.list", array(
            "countries" => $countries,
            "awards" => $awards,
            "accounts" => $accounts,
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $awards = Award::all();
        return view("accounts.insert", array(
            "countries" => $countries,
            "awards" => $awards,
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $account = new Account;
        $account->username = $request->input("username");
        $account->join_date = $request->input("join_date");
        $account->highscore = $request->input("highscore");
        $account->country_id = $request->input("country");
        $account->save();
        $account->award()->attach($request->input("awards"));

        return redirect("/accounts");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::all();
        $awards = Award::all();
        //$x->id, $x->username, $x->join_date, $x->highscore, $x->country_id, $x->awards
        //$x->country_name
        //$x->awards -> diminta berupa id semua award dipisah dengan koma
        $account = Account::find($id);
        $account->country_name = $account->country->name;
        $award_account = $account->award;
        $account->awards = "";

        // dd(
        //     array(
        //         "Account" => Account::find($id),
        //         "Country" => Account::find($id)->country,
        //         "Award" => Account::find($id)->award
        //     )
        // );

        foreach($award_account as $i){
            $account->awards .= $i->id.",";
        }
        return view("accounts.update", array(
            "countries" => $countries,
            "awards" => $awards,
            "x" => $account
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect("/accounts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Account::find($id);
        $account->award()->detach();
        $account->delete();
        return redirect("/accounts");
    }
}
