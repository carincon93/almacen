<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;
use App\Historical_record;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataClassr  = Classroom::all()->where('nombre_ambiente', 'sistemas 1')->first();
        if($dataClassr != null) {
            return view('admin')->with('dataClassr', $dataClassr);
        } else {
            return view('admin');
        }
    }

    public function historial_prestamos() {
        $historical_record = Historical_record::orderBy('id', 'ASC')->paginate(10);
        return view('historical')->with('historical_record', $historical_record);
    }
}
