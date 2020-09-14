<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //silakan coba supaya bisa disearch
        //searchnya pakai $request->input("name") dan $request->input("code")
        $countries = DB::select("select * from countries");
        return view("countries.list", array(
            "countries" => $countries
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("countries.insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert(
            'insert into countries (id, name, code) values (?, ?, ?)',
            [0, $request->input("name"), $request->input("code")]
        );
        return redirect("/countries");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = DB::select("select * from countries where id = ?", [$id])[0];
        return view("countries.update", array(
            "x" => $country
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
        DB::update(
            'update countries set name = ?, code = ? where id = ?',
            [$request->input("name"), $request->input("code"), $id]
        );
        return redirect("/countries");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from countries where id = $id");
        return redirect("/countries");
    }
}
