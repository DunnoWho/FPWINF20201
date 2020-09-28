<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    // public $timestamps = false;
    use SoftDeletes;

    public function kelas(){
        return $this->hasMany("App\DosenModel", "id_dosen_pembimbing");
    }

    public function mahasiswaWali(){
        return $this->belongsTo("App\MahasiswaModel", "mahasiswa_kelas", "id", "nrp");
    }

    public function MahasiswaBimbinganTa()
    {
        return $this->hasManyThrough(
            'App\MahasiswaModel',
            'App\JudulTaModel',
            'kode',
            'nrp',
            'kode',
            'nrp'
        );
    }
}
