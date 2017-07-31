<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'nombre_ambiente', 'tipo_ambiente', 'movilidad', 'estado', 'cupo', 'disponibilidad',  'borrowed_at', 'instructor_id',
    ];

    public function instructor() {
    	return $this->belongsTo('App\instructor');
    }
}
