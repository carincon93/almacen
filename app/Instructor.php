<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'nombre','apellidos','documento','area','ip','celular','correo',
    ];
    public function ambiente(){
    	return $this->hasOne('App\ambiente');
    }
}
