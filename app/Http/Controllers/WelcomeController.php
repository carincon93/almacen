<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;
use App\Instructor;
use App\Historical_record;

class WelcomeController extends Controller
{
    public function index()
    {
        $dataClassroom  = Classroom::all()->sortBy('nombre_ambiente');
        // $dataHistorical = Historical_record::all()->sortByDesc('borrowed_at');
        $dataHistorical = Historical_record::orderByDesc('borrowed_at', 'DESC')->take(5)->get();
        $dataInstructor = Instructor::all()->sortBy('nombre');
        return view('welcome')
        ->with('dataClassroom', $dataClassroom)
            ->with('dataHistorical', $dataHistorical)
                ->with('dataInstructor', $dataInstructor);
    }

    public function ajaxsearch(Request $request)
    {
        $query = Classroom::nombre_ambiente($request->get('nombre_ambiente'))->orderBy('id', 'ASC')->get();
        return view('classroomajx', compact('query'));
    }
    public function documentoajax(Request $request)
    {
        $query = Instructor::numero_documento($request->get('numero_documento'))->orderBy('id', 'ASC')->get();
        return view('instructordocajx', compact('query'));
    }

}
