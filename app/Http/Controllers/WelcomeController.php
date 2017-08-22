<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;
use App\Instructor;
use App\HistoryRecord;

class WelcomeController extends Controller
{
    protected $dataClassroom = [];
    protected $dataHistoryR = [];
    protected $dataInstructor = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataClassroom  = Classroom::orderByDesc('disponibilidad')->get();
        $dataHistoryR   = HistoryRecord::orderByDesc('prestado_en', 'DESC')->take(5)->get();
        $dataInstructor = Instructor::all()->sortBy('nombre');

        return view('welcome', compact('dataClassroom', 'dataHistoryR', 'dataInstructor'));
    }
}
