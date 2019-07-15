<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use

class Role extends Model
{
    public function users()
    {
    	 return $this->hasMany('App\User::class');
    }
}
