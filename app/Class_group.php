<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_group extends Model
{
    protected $fillable = [
        'id_ficha', 'nombre_ficha', 'fecha_inicio','tipo_formacion',
    ];

    public function instructor() {
    	return $this->belongsTo('App\instructor');
    }
}
