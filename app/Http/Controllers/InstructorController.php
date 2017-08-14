<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InstructorRequest;

use App\Instructor;
use App\Instructor_type;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('documentoajax', 'disponibilidad_instructor', 'modificar_disponibilidad_ins');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataInstructor = Instructor::all()->sortBy('nombre');
        return view('instructors.index')->with('dataInstructor', $dataInstructor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructor_type = Instructor_type::all();
        return view('instructors.create')
            ->with('instructor_type', $instructor_type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstructorRequest $request)
    {
        $ins = new Instructor();
        $ins->nombre               = $request->get('nombre');
        $ins->apellidos            = $request->get('apellidos');
        $ins->numero_documento     = $request->get('numero_documento');
        $ins->area                 = $request->get('area');
        $ins->ip                   = $request->get('ip');
        $ins->telefono             = $request->get('telefono');
        $ins->celular              = $request->get('celular');
        $ins->email                = $request->get('email');
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->getClientOriginalExtension();
            $request->imagen->move(public_path('/images/instructors/'), $file);
            $ins->imagen = '/images/instructors/'.$file;
        }
        $ins->instructor_type_id   = $request->get('instructor_type_id');
        if ($ins->save()){
            return redirect('/admin/instructor')
                ->with('status', 'El instructor '.$ins->nombre.' '.$ins->apellidos.' fue adicionado con éxito');
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
        $dataInstructor  = Instructor::find($id);
        return view('instructors.show')
        ->with('dataInstructor', $dataInstructor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataInstructor  = Instructor::find($id);
        $instructor_type = Instructor_type::all();
        return view('instructors.edit')
        ->with('dataInstructor', $dataInstructor)
            ->with('instructor_type', $instructor_type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstructorRequest $request, $id)
    {
        $ins = Instructor::find($id);
        $ins->nombre                 = $request->get('nombre');
        $ins->apellidos              = $request->get('apellidos');
        $ins->numero_documento       = $request->get('numero_documento');
        $ins->area                   = $request->get('area');
        $ins->ip                     = $request->get('ip');
        $ins->telefono               = $request->get('telefono');
        $ins->celular                = $request->get('celular');
        $ins->email                  = $request->get('email');
        if ($request->hasFile('imagen')) {
            \File::delete(public_path($ins->imagen));
            $file = time().'.'.$request->imagen->getClientOriginalExtension();
            $request->imagen->move(public_path('/images/instructors/'), $file);
            $ins->imagen = '/images/instructors/'.$file;
        }
        $ins->instructor_type_id     = $request->get('instructor_type_id');
        if ($ins->save()){
            return redirect('admin/instructor')
                ->with('status', 'El instructor '.$ins->nombre.' '.$ins->apellidos.' fue modificado con éxito');
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
        return redirect('/admin/instructor')
            ->with('status', 'El instructor fue eliminado con éxito');
    }

    public function disponibilidad_instructor(Request $request, $idInstructor)
    {
        $dataInstructor = Instructor::where('id', '=', $idInstructor)->first();
        $dataInstructor->disponibilidad = "no disponible";
        $dataInstructor->save();
    }

    public function modificar_disponibilidad_ins(Request $request, $idInstructor)
    {
        $dataInstructor = Instructor::where('id', '=', $idInstructor)->first();
        $dataInstructor->disponibilidad = "disponible";
        $dataInstructor->save();
    }

    public function documentoajax(Request $request)
    {
        $query = Instructor::numero_documento($request->get('numero_documento'))->get();
        return view('instructordocajx', compact('query'));
    }
}
