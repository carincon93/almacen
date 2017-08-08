<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor_type extends Model
{
    public function instructor() {
    	return $this->hasMany('App\instructor');
    }
}
