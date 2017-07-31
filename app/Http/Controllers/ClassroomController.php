<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Instructor;
use App\Historial_classroom_loan;
use App\Http\Requests\ClassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms=Classroom::all();
        return view('classrooms.index')->with('classrooms', $classrooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructores=Instructor::all();
        return view('classrooms.create')->with('instructores', $instructores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassroomRequest $request)
    {
        $clr= new Classroom();
        $clr->nombre_ambiente=$request->get('nombre_ambiente');
        $clr->tipo_ambiente=$request->get('tipo_ambiente');
        $clr->movilidad=$request->get('movilidad');
        $clr->estado=$request->get('estado');
        $clr->cupo=$request->get('cupo');
        if ($clr->save()){
            return redirect('classroom')->with('status', 'el ambiente fue adicionado con exito');
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
        $am=Ambiente::find($id);
        $instructores=Instructor::all();
        return view('classroom.edit', compact('am','instructores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $am= Ambiente::find($id);
        $am->nombre_ambiente=$request->get('nombre_ambiente');
        $am->tipo_ambiente=$request->get('tipo_ambiente');
        $am->movilidad=$request->get('movilidad');
        $am->estado=$request->get('estado');
        $am->cupo=$request->get('cupo');
        if ($am->save()) {
            return redirect('ambiente')->with('status', 'El ambiente fue modificado con exito');
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
        Ambiente::destroy($id);
        return redirect('ambiente')->with('status', 'El ambiente fue eliminado con exito');
    }

    public function classrooml($id)
    {
        $dataInstructor = Instructor::all();
        $dataClassroom = Classroom::find($id);
        $dataClassroomLoan = Historial_classroom_loan::all();

        return view('classrooms.classroom_loan')
            ->with('dataClassroom',  $dataClassroom)
            ->with('dataInstructor', $dataInstructor)
            ->with('dataClassroomLoan', $dataClassroomLoan);
    }
    public function classroom_update(Request $request)
    {
        $dataClassroom = Classroom::find($request->id);
        $dataClassroom->disponibilidad = $request->get('disponibilidad');
        $dataClassroom->borrowed_at = $request->get('borrowed_at');
        $dataClassroom->instructor_id  = $request->get('instructor_id');

        if($dataClassroom->save()) {
            return redirect('/')->with('status', 'El ambiente '.$dataClassroom->nombre_ambiente.' fue asignado con éxtio!');
        }
    }

    public function loan(Request $request)
    {
        $dataClassroom = new Historial_classroom_loan();
        $dataClassroom->instructor_id  = $request->get('instructor_id');
        $dataClassroom->classroom_id = $request->get('classroom_id');
        $dataClassroom->borrowed_at = $request->get('borrowed_at');
        $dataClassroom->save();
    }

    public function modify_loan(Request $request, $borrowed_at)
    {
        $cl = Historial_classroom_loan::where('borrowed_at', '=', $borrowed_at)->first();
        $cl->delivered_at = $request->get('delivered_at');
        $cl->save();
    }
}
