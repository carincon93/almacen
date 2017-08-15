<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'nombre', 'apellidos', 'numero_documento', 'area', 'ip', 'telefono', 'celular', 'email', 'imagen', 'disponibilidad', 'instructor_type_id',
    ];

    public function instructor_type() {
    	return $this->belongsTo('App\instructor_type');
    }
    public function classroom() {
    	return $this->hasOne('App\classroom');
    }
    public function historial_classroom_loan() {
    	return $this->hasMany('App\history_record');
    }

    public function scopeNombre_instructor($query, $nombre_instructor)
    {
        if (trim($nombre_instructor) != '') {
            $query->where('nombre', 'LIKE', "%$nombre_instructor%");
        }
    }
      public function scopeNumero_documento($query, $numero_documento)
    {
        if (trim($numero_documento) != '') {
            $query->where('numero_documento', '=', "$numero_documento");
        }
    }
}
