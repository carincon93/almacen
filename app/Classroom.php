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
    	return $this->hasMany('App\historical_record');
    }

    public function scopeNombre_ambientetbl($query, $nombre_ambiente)
    {
        if (trim($nombre_ambiente) != ' ') {
            $query->where('nombre_ambiente', 'LIKE', "%$nombre_ambiente%");
        }
    }

    public function scopeNombre_ambiente($query, $nombre_ambiente)
    {
        if (trim($nombre_ambiente) != ' ') {
            $query->where('nombre_ambiente', 'LIKE', "%$nombre_ambiente%");
        }
    }
}
