<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;

    //
    protected $table='users';

   public function posts()
   {
       return $this->hasMany('App\Post');
   }
}
