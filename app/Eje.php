<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eje extends Model
{
    //
    public function eje_distribucion(){
    	return $this->hasMany(EjeDistribucion::class);
    }

    public function llanta_eje(){
    	return $this->hasMany(Almacen::class);
    }
}
