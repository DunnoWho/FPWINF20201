<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    public $timestamps = false;

    public function account(){
        return $this->belongsToMany("App\Account", "account_award");
    }
}
