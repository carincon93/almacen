<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historical_record extends Model
{
    protected $fillable = [
        'instructor_id', 'classroom_id', 'borrowed_at', 'delivered_at', 'novedad',
    ];

    public function instructor() {
    	return $this->belongsTo('App\instructor');
    }
    public function classroom() {
    	return $this->belongsTo('App\classroom');
    }

    public $timestamps = false;
}
