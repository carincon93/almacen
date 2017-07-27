<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructores=Instructor::all();
        return view('instructor.index')->with('instructores', $instructores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $in= new Instructor();
        $in->nombre=$request->get('nombre');
        $in->apellidos=$request->get('apellidos');
        $in->documento=$request->get('documento');
        $in->area=$request->get('area');
        $in->ip=$request->get('ip');
        $in->celular=$request->get('celular');
        $in->correo=$request->get('correo');
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
        return view('instructor.show')->with('instructor', Instructor::find($id));
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
        return view('instructor.edit')->with('in',$in);
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
