<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
    protected $fillable = [
        'id_ficha', 'nombre_ficha', 'tipo_formacion','disponibilidad',
    ];

    public function instructor() {
    	return $this->belongsTo('App\Instructor');
    }
    public function historyrecords() {
    	return $this->hasMany('App\HistoryRecord');
    }
    public function classroom() {
    	return $this->hasMany('App\Classroom');
    }
}
