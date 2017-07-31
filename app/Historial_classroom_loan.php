<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_classroom_loan extends Model
{
    protected $fillable = [
        'instructor_id', 'classroom_id', 'borrowed_at', 'delivered_at',
    ];

    public function instructor() {
    	return $this->belongsTo('App\instructor');
    }

    // public function scopeBorrowed($query, $borrowed_at)
    // {
    //     if (trim($borrowed_at) != ' ') {
    //         $query->where('borrowed_at', 'LIKE', "$borrowed_at");
    //     }
    // }
}
