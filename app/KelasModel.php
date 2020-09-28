<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    // protected $primaryKey = 'nrp';
    // public $incrementing = false;
    public $timestamps = false;
    // use SoftDeletes;

    public function dosenPengajar(){
        return $this->belongsTo("App\DosenModel", "id_dosen_pengajar");
    }

    public function mahasiswa(){
        return $this->belongsToMany("App\MahasiswaModel", "mahasiswa_kelas", "id", "nrp")->withPivot("nilai");
    }
}
