<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $awards = DB::table('awards')
            ->orderBy("name")
            ->where("name", "like", "%" . $request->input("name") . "%")
            ->where("icon", "like", "%" . $request->input("icon") . "%")
            ->get();
        // $awards = DB::table('awards');
        // $awards = $awards->orderBy("name");
        // $awards = $awards->where("name", "like", "%" . $request->input("name") . "%");
        // $awards = $awards->where("icon", "like", "%" . $request->input("icon") . "%");
        // $awards = $awards->get();
        return view("awards.list", array(
            "awards" => $awards
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("awards.insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('awards')->insert(
            array(
                "id" => 0,
                "name" => $request->input("name"),
                "icon" => $request->input("icon"),
                "color" => $request->input("color"),
            )
        );
        return redirect("/awards");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $award = DB::table('awards')
            ->where("id", "=", $id)
            ->first();
        return view("awards.update", array(
            "x" => $award
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
        DB::table('awards')
            ->where("id", "=", $id)
            ->update(
                array(
                    "name" => $request->input("name"),
                    "icon" => $request->input("icon"),
                    "color" => $request->input("color"),
                )
            );
        return redirect("/awards");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('awards')
            ->where("id", "=", $id)
            ->delete();
        return redirect("/awards");
    }
}
