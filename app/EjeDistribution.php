<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class EjeDistribucion extends Model
{
    //
    public function distribuciones(){
    	return $this->belongsTo(Distribucion::class, 'distribucion_id');
    }

    public function ejes(){
    	return $this->belongsTo(Eje::class, 'eje_id');
    }
}
