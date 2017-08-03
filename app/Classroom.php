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
    public function Historial_classroom_loan() {
    	return $this->hasMany('App\historial_classroom_loan');
    }
}
