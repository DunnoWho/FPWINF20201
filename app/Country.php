<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;
    protected $fillable = ["name", "code"];
    //protected $guarded = ["id"];
    
    public function account(){
        return $this->hasMany("App\Account");
    }
}
