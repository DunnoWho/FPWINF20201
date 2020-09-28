<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Country;

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

        //$countries = DB::select("select * from countries");

        $countries = Country::all();
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
        // DB::insert(
        //     'insert into countries (id, name, code) values (?, ?, ?)',
        //     [0, $request->input("name"), $request->input("code")]
        // );

        //cara 1
        Country::create(array(
            "name" => $request->input("name"),
            "code" => $request->input("code")
        ));

        // //cara 2
        // Country::create($request->all());

        // //cara 3
        // //country = new Country();
        // $country = new Country;
        // //country.name = "nama"
        // $country->name = $request->input("name");
        // //country.code = "kode"
        // $country->code = $request->input("code");
        // $country->save();

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
        //$country = DB::select("select * from countries where id = ?", [$id])[0];
        $country = Country::find($id);
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
        // DB::update(
        //     'update countries set name = ?, code = ? where id = ?',
        //     [$request->input("name"), $request->input("code"), $id]
        // );

        //cara 1
        Country::find($id)->update(array(
            "name" => $request->input("name"),
            "code" => $request->input("code"),
        ));
        // find($id) = where("id", "=", $id)

        // //cara 3
        // //country = Country.find($id);
        // $country = Country::find($id);
        // //country.name = "nama"
        // $country->name = $request->input("name");
        // //country.code = "kode"
        // $country->code = $request->input("code");
        // $country->save();

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
        //DB::delete("delete from countries where id = $id");

        //cara 1
        Country::destroy($id);

        // //cara 2
        // Country::find($id)->delete();

        return redirect("/countries");
    }
}
