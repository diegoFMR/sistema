<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class EjeDistribucion extends Model
{
    //
    protected $table = 'eje_distributions';


    public function distribuciones(){
    	return $this->belongsTo(Distribution::class, 'distribution_id');
    }

    public function ejes(){
    	return $this->belongsTo(Eje::class, 'eje_id');
    }

    public function positions(){
    	return $this->belongsTo(DistributionPositions::class, 'distribution_position_id');
    }
}
