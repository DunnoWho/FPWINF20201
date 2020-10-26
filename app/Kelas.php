<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    protected $table = 'kelas';
    //protected $primaryKey = 'kode';
    //public $incrementing = false;
    //public $timestamps = false;
    use SoftDeletes;
}
