<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'id_ficha', 'nombre_ficha', 'tipo_formacion', 
    ];
    public function scopeFile($query, $id_ficha)
    {
        if (trim($id_ficha) != ' ') {
            $query->where('id_ficha', 'LIKE', "%$id_ficha%");
        }
    }
}

