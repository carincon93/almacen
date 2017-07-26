<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ambiente;
use App\Instructor;


class AmbienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambientes=Ambiente::all();
        return view('ambiente.index')->with('ambientes', $ambientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructores=Instructor::all();
        return view('ambiente.create')->with('instructores', $instructores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $am= new Ambiente();
        $am->nombre_ambiente=$request->get('nombre_ambiente');
        $am->tipo_ambiente=$request->get('tipo_ambiente');
        $am->movilidad=$request->get('movilidad');
        $am->estado=$request->get('estado');
        $am->cupo=$request->get('cupo');
        $am->id_instructor=$request->get('id_instructor');
        if ($am->save()){
            return redirect('ambiente')->with('status', 'el ambiente fue adicionado con exito');
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
        return view('ambiente.show')->with('ambiente', Ambiente::find($id));
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
        return view('ambiente.edit', compact('am','instructores'));
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
    // public function listambientes(){
    //     $am=Ambiente::all();
    //     return view('home')->with('am', $am);

    // }
}
