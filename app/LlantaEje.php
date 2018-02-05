<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LlantaEje extends Model
{
    //
    public function llantas(){
    	return $this->belongsTo(Almacen::class, 'llanta_id');
    }

    public function ejes(){
    	return $this->belongsTo(Eje::class, 'eje_id');
    }
}
