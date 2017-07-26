<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $fillable = [
        'nombre_ambiente', 'tipo_ambiente', 'movilidad','estado','cupo','instructor_id',
    ];
    public function instructor(){
    	return $this->belongsTo('App\instructor');
    }
}
