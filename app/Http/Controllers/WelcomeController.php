<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use App\Classroom;
use App\Historial_classroom_loan;

class WelcomeController extends Controller
{
    /**
     * Display welcome view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countHistorial = Historial_classroom_loan::all()->count();
        $dataHistorial = Historial_classroom_loan::orderBy('borrowed_at', 'desc')->paginate(5);
        $dataClassroom = Classroom::all();
        $count = 1;
        return view('welcome')
            ->with('count', $count)
            ->with('dataClassroom', $dataClassroom)
            ->with('dataHistorial', $dataHistorial)
            ->with('countHistorial', $countHistorial);
    }
}
