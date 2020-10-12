<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $timestamps = false;

    public function level(){
        return $this->belongsTo("App\Level");
    }

    public function requestLog(){
        return $this->hasMany("App\RequestLog");
    }
}
