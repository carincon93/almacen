<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClassroomRequest;

use App\Classroom;
use App\Instructor;
use App\Historical_record;

class ClassroomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('request', 'request_approved', 'delivery', 'delivery_approved', 'save_historical_record', 'modify_historical_record');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataClassroom = Classroom::orderBy('nombre_ambiente', 'ASC')->paginate(10);
        return view('classrooms.index')
            ->with('dataClassroom', $dataClassroom);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomRequest $request)
    {
        $clr = new Classroom();
        $clr->nombre_ambiente   = $request->get('nombre_ambiente');
        $clr->tipo_ambiente     = $request->get('tipo_ambiente');
        $clr->movilidad         = $request->get('movilidad');
        $clr->estado            = $request->get('estado');
        $clr->cupo              = $request->get('cupo');
        if ($clr->save()){
            return redirect('/admin/classroom')->with('status', 'El ambiente '.$clr->nombre_ambiente.' fue adicionado con éxito');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('classrooms.show')->with('classroom', classroom::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clr = Classroom::find($id);
        return view('classrooms.edit')
            ->with('clr', $clr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassroomRequest $request, $id)
    {
        $clr = Classroom::find($id);
        $clr->nombre_ambiente = $request->get('nombre_ambiente');
        $clr->tipo_ambiente   = $request->get('tipo_ambiente');
        $clr->movilidad       = $request->get('movilidad');
        $clr->estado          = $request->get('estado');
        $clr->cupo            = $request->get('cupo');
        if ($clr->save()) {
            return redirect('/admin/classroom')->with('status', 'El ambiente '.$clr->nombre_ambiente.' fue modificado con éxito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classroom::destroy($id);
        return redirect('/admin/classroom')->with('status', 'El ambiente fue eliminado con éxito');
    }

    public function ajaxsearch(Request $request)
    {
        $query = Classroom::nombre_ambientetbl($request->get('nombre_ambiente'))->orderBy('id', 'ASC')->get();
        return view('classrooms.classroomajx', compact('query'));
    }



    // Prestar ambiente
    public function request($id)
    {
        $dataClassroom  = Classroom::find($id);
        $dataInstructor = Instructor::all()->sortBy('nombre');

        return view('classrooms.classroom_request')
            ->with('dataClassroom', $dataClassroom)
                ->with('dataInstructor', $dataInstructor);
    }

    public function request_approved(Request $request)
    {
        $dataClassroom = Classroom::find($request->id);
        $dataClassroom->disponibilidad = 'no disponible';
        $dataClassroom->borrowed_at    = $request->get('borrowed_at');
        $dataClassroom->instructor_id  = $request->get('instructor_id');

        if($dataClassroom->save()) {
            session()->flash('statusr', 'El ambiente '.$dataClassroom->nombre_ambiente.' fue asignado con éxtio!');
            return redirect('/');
        }
    }
    public function delivery($id)
    {
        $dataClassroom  = Classroom::find($id);

        return view('classrooms.classroom_delivery')
            ->with('dataClassroom', $dataClassroom);
    }
    public function delivery_approved(Request $request)
    {
        $dataClassroom = Classroom::find($request->id);
        $dataClassroom->disponibilidad = 'disponible';
        $dataClassroom->instructor_id  = NULL;

        if($dataClassroom->save()) {
            $request->session()->flash('statusd', 'El ambiente '.$dataClassroom->nombre_ambiente.' está disponible nuevamente!');
            return redirect('/');
        }
    }

    public function save_historical_record(Request $request)
    {
        $dataHistorical = new Historical_record();
        $dataHistorical->instructor_id  = $request->get('instructor_id');
        $dataHistorical->classroom_id   = $request->get('classroom_id');
        $dataHistorical->borrowed_at    = $request->get('borrowed_at');

        $dataHistorical->save();
    }

    public function modify_historical_record(Request $request, $borrowed_at)
    {
        $dataHistorical = Historical_record::where('borrowed_at', '=', $borrowed_at)->first();
        $dataHistorical->delivered_at = $request->get('delivered_at');
        $dataHistorical->novedad      = $request->get('novedad');
        $dataHistorical->save();
    }

}
