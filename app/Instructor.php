<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos',
        'numero_documento',
        'area',
        'ip',
        'telefono',
        'celular',
        'email',
        'imagen',
        'disponibilidad',
    ];

    public function classgroups() {
    	return $this->hasMany('App\ClassGroup','numero_documento');
    }
    public function classroom() {
    	return $this->hasOne('App\Classroom');
    }
    public function historyrecords() {
    	return $this->hasMany('App\HistoryRecord');
    }

    public function scopeNumero_documento($query, $numero_documento)
    {
        if (trim($numero_documento) != '') {
            $query->where('numero_documento', '=', "$numero_documento");
        }
    }
}
