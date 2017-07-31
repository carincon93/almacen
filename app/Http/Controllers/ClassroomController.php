<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
use App\Instructor;
use App\Historial_classroom_loan;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataInstructor = Instructor::all();
        $dataClassroom = Classroom::find($id);
        return view('classrooms.edit')->with('dataClassroom',  $dataClassroom)->with('dataInstructor', $dataInstructor);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
