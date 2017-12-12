<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoUsuario extends Model
{
    //

    protected $table = "tipousuarios";
    
    public function users(){
    	return $this->belongsToMany(User::class);
    }
}
