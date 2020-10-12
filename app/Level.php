<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public $timestamps = false;

    public function accounts()
    {
        return $this->hasMany("App\Account");
    }
}
