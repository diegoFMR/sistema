<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tropa extends Model
{
    //
    public function distribuciones(){
    	return $this->belongsTo(Distribucion::class, 'distribucion_id');
    }

    public function status(){
    	return $this->belongsTo(Status::class, 'status_id');
    }

    public function tropaModels(){
    	return $this->belongsTo(TropaModel::class, 'modelo_id');
    }

    public function marcas(){
    	return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function clases(){
    	return $this->belongsTo(Clase::class, 'clase_id');
    }

}
