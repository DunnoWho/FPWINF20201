<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nrp';
    public $incrementing = false;
    //public $timestamps = false;
    use SoftDeletes;

    public function dosenWali(){
        return $this->belongsTo("App\DosenModel", "id_dosen_wali");
    }

    public function kelas(){
        return $this->belongsToMany("App\KelasModel", "mahasiswa_kelas", "nrp", "id")->withPivot("nilai");
    }

    public function judulTa(){
        return $this->hasOne("App\JudulTaModel", "nrp");
    }

    public function doping()
    {
        return $this->hasOneThrough(
            'App\DosenModel',
            'App\JudulTaModel',
            'nrp',
            'kode',
            'nrp',
            'id_dosen_pembimbing'
        );
    }
}
