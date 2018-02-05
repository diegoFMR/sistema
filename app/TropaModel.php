<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TropaModel extends Model
{
    //
    public function tropa(){
    	return $this->hasMany(Tropa::class);
    }
}
