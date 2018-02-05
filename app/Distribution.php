<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    //
    public function eje_distribucion(){
    	return $this->hasMany(EjeDistribucion::class);
    }

    public function tropa(){
    	return $this->hasMany(Tropa::class);
    }
}
