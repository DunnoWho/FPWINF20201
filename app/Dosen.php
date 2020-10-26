<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    //public $timestamps = false;
    use SoftDeletes;
}
