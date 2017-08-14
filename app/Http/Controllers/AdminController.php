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
        $dataS1  = Classroom::all()->where('nombre_ambiente', 'sistemas 1')->where('disponibilidad', '=', 'no disponible')->first();
        $dataS3  = Classroom::all()->where('nombre_ambiente', 'sistemas 3')->where('disponibilidad', '=', 'no disponible')->first();
        $dataMeta  = Classroom::all()->where('nombre_ambiente', 'metalografia')->where('disponibilidad', '=', 'no disponible')->first();
        return view('admin', compact('dataS1', 'dataS3', 'dataMeta'));
    }

    public function historial_prestamos() {
        $historical_record = Historical_record::orderBy('prestado_en', 'DESC')->paginate(15);
        return view('historical')->with('historical_record', $historical_record);
    }
}
