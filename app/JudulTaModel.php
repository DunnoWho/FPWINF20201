<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JudulTaModel extends Model
{
    protected $table = 'judul_ta';
    // protected $primaryKey = 'nrp';
    // public $incrementing = false;
    public $timestamps = false;
    // use SoftDeletes;

    public function dosenPembimbing(){
        return $this->belongsTo("App\DosenModel", "id_dosen_pembimbing");
    }

    public function mahasiswa(){
        return $this->belongsTo("App\MahasiswaModel", "mahasiswa_kelas", "id", "nrp");
    }
}
