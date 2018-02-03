<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    //
    public function fabricantes(){
    	return $this->belongsTo(Fabricante::class, 'fabricante_id');
    }

    public function aplicaciones(){
    	return $this->belongsTo(Aplicacion::class, 'aplicacion_id');
    }

    public function almacen(){
    	return $this->hasMany(Almacen::class);
    }
}
