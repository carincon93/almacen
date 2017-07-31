<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'nombre','apellidos','numero_documento','area','ip','telefono','celular','email','instructor_type_id',
    ];

    public function instructor_type() {
    	return $this->belongsTo('App\instructor_type');
    }
    public function classroom() {
    	return $this->hasOne('App\classroom');
    }

    public function historial_classroom_loan() {
    	return $this->hasMany('App\historial_classroom_loan');
    }

    public function scopeDocumento($query, $documento)
    {
        if (trim($documento) != ' ') {
            $query->where('numero_documento', 'LIKE', "$documento");
        }
    }
}
