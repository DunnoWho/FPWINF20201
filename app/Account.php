<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    protected $primaryKey = 'username';
    public $incrementing = false;
    public $timestamps = false;

    // kalo nama field password di database bukan "password"
    // public function getAuthPassword()
    // {
    //     return $this->pwd;
    // }

}
