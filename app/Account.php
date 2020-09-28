<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $timestamps = false;

    public function country(){
        return $this->belongsTo("App\Country");
    }

    public function award(){
        return $this->belongsToMany("App\Award", "account_award");
    }
}
