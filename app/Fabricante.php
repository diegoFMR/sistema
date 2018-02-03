<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    //
    public function design(){
    	return $this->hasMany(Design::class);
    }

}
