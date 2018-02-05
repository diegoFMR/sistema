<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    public function tropa(){
    	return $this->hasMany(Tropa::class);
    }
}
