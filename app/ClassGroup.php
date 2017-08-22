<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
    protected $fillable = [
        'id_ficha', 'nombre_ficha', 'numero_documento', 'tipo_formacion',
    ];

    public function instructor() {
    	return $this->belongsTo('App\Instructor', 'numero_documento');
    }
}
