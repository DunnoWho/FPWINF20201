<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel;

class MainController extends Controller
{
    public function coba(Request $request)
    {
        dd(
            array(
                "a" => $request->input([])
            )
        );
    }

    public function index(){
        $no10 = array();
        MahasiswaModel::find(218117000)->kelas()->attach([7, 10], ["nilai" => 0]);
        foreach (MahasiswaModel::find(218117000)->kelas as $i) {
            $no10[] = array(
                "makul" => $i->matkul,
                "kelas" => $i->kelas,
                "dosen" => $i->dosenPengajar->nama,
                "nilai" => $i->pivot->nilai,
                "i" => $i
            );
        }
        MahasiswaModel::find(218117000)->kelas()->detach([7, 10], ["nilai" => 0]);
        dd(array(
            "no 9" => array(
                "nama MahasiswaModel" => MahasiswaModel::find(218117000)->nama,
                "nama dosen wali" => MahasiswaModel::find(218117000)->dosenWali->nama,
                "judul TA" => MahasiswaModel::find(218117000)->judulTa->judul,
                "nama dosen pembimbing TA" => MahasiswaModel::find(218117000)->judulTa->dosenPembimbing->nama,
                "nama dosen pembimbing TA (cara 2)" => MahasiswaModel::find(218117000)->doping->nama,
                "nama dosen pembimbing TA (cara 3)" => MahasiswaModel::find(218117000)->doping->where("nama","like","%%")->get()
            ),
            "no 10" => $no10
        ));
    }
}
