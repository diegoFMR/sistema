<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    //
    public function design(){
    	return $this->hasMany(Design::class);
    }

    public function almacen(){
    	return $this->hasMany(Almacen::class);
    }
}
