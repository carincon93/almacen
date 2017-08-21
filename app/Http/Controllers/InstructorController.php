<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InstructorRequest;
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

        $instructors = Instructor::paginate(5);
        return view('instructors.index')
            ->with('instructors', $instructors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructor_type = Instructor_type::all();
        return view('instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstructorRequest $request)
    {
        $in = new Instructor();
        $in->nombre               = $request->get('nombre');
        $in->apellidos            = $request->get('apellidos');
        $in->vinculacion1         = $request->get('vinculacion1');
        $in->area                 = $request->get('area');
        $in->numero_documento     = $request->get('numero_documento');
        $in->ip                   = $request->get('ip');
        $in->celular              = $request->get('celular');
        $in->email                = $request->get('email');

        if ($in->save()){
            return redirect('instructor')
                ->with('status', 'El instructor fue adicionado con éxito');
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
        $instructor_type = Instructor_type::all();
        return view('instructors.show')
            ->with('instructor', Instructor::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $in              = Instructor::find($id);
        return view('instructors.edit')
            ->with('in',$in);
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
        $in = Instructor::find($id);
        $in->nombre               = $request->get('nombre');
        $in->apellidos            = $request->get('apellidos');
        $in->vinculacion1         = $request->get('vinculacion1');
        $in->area                 = $request->get('area');
        $in->numero_documento     = $request->get('numero_documento');
        $in->ip                   = $request->get('ip');
        $in->celular              = $request->get('celular');
        $in->email                = $request->get('email');
        if ($in->save()){
            return redirect('instructor')
                ->with('status', 'El instructor fue modificado con éxito');
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
        return redirect('instructor')
            ->with('status', 'El instructor fue eliminado con éxito');
    }
     public function ajaxsearch(Request $request){
        $query=Instructor::name($request->get('nombre'))->orderBy('id','ASC')->get();
        return view('instructors.ajax', compact('query'));
        
    }
    // public function ajaxsearch(Request $request)
    // {
    //     $query = Instructor::documento($request->get('documento'))->limit(1)->get();
    //     return view('instructors.ajax')
    //         ->with('data', $query);
    // }
}
