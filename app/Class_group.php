<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_group extends Model
{
    protected $fillable = [
        'id_ficha', 'nombre_ficha', 'tipo_formacion',
    ];
}
