<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor_type extends Model
{
    protected $fillable = [
        'tipo_instructor',
    ];

    public function instructor() {
    	return $this->hasMany('App\instructor');
    }
}
