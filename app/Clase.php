<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    //
    public function tropa(){
    	return $this->hasMany(Tropa::class);
    }
}
