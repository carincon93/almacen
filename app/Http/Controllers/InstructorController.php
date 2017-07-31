<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use App\Instructor_type;
use App\Http\Requests\InstructorRequest;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $instructors=Instructor::all();

        return view('instructors.index')->with('instructors', $instructors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructor_type=Instructor_type::all();
        return view('instructors.create')->with('instructor_type', $instructor_type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstructorRequest $request)
    {
        $in= new Instructor();
        $in->nombre=$request->get('nombre');
        $in->apellidos=$request->get('apellidos');
        $in->numero_documento=$request->get('numero_documento');
        $in->area=$request->get('area');
        $in->ip=$request->get('ip');
        $in->telefono=$request->get('telefono');
        $in->celular=$request->get('celular');
        $in->email=$request->get('email');
        $in->instructor_type_id=$request->get('instructor_type_id');
        if ($in->save()){
            return redirect('instructor')->with('status', 'el instructor fue adicionado con exito');
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
        $instructor_type=Instructor_type::all();
        return view('instructors.show')->with('instructor', Instructor::find($id))->with('instructor_type', $instructor_type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $in=Instructor::find($id);
        $instructor_type=Instructor_type::all();
        return view('instructors.edit')->with('in',$in)->with('instructor_type',$instructor_type);
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
        $in= new Instructor();
        $in->nombre=$request->get('nombre');
        $in->apellidos=$request->get('apellidos');
        $in->documento=$request->get('documento');
        $in->area=$request->get('area');
        $in->ip=$request->get('ip');
        $in->celular=$request->get('celular');
        $in->correo=$request->get('correo');
        $in->instructor_type_id=$request->get('instructor_type_id');
        if ($in->save()){
            return redirect('instructor')->with('status', 'el instructor fue modificado con exito');
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
        Instructor::destroy($id);
        return redirect('instructor')->with('status', 'El instructor fue eliminado con exito');
    }
    public function listarticles(){
        // $arts=Article::all();
        // return view('welcome')->with('arts', $arts);

    }
    public function search(Request $request){
        // $query=Instructor::name($request->get('nombre'))->orderBy('id','ASC')->get();
        // return view('instructor.ajax')->with('instructores',$query);
        
    }
}
