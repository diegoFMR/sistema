<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipoUsuarios(){
        return $this->belongsToMany(tipoUsuario::class);
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function role_id(){
        return $this->tipoUsuario_id;
    }
}
