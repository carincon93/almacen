<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClassGroupRequest;

use App\Class_group;

class ClassGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGroup = Class_group::all()->sortBy('nombre_ficha');
        return view('class_groups.index')->with('dataGroup', $dataGroup);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('class_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassGroupRequest $request)
    {
        $cg = new Class_group();
        $cg->id_ficha       = $request->get('id_ficha');
        $cg->nombre_ficha   = $request->get('nombre_ficha');
        $cg->tipo_formacion = $request->get('tipo_formacion');
        if ($cg->save()){
            return redirect('/admin/class_group')->with('status', 'La ficha '.$cg->nombre_ficha.' fue adicionada con éxito');
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
        return view('class_groups.show')->with('dataGroup', Class_group::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataGroup = Class_group::find($id);
        return view('class_groups.edit')
            ->with('dataGroup', $dataGroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassGroupRequest $request, $id)
    {
        $cg = Class_group::find($id);
        $cg->id_ficha       = $request->get('id_ficha');
        $cg->nombre_ficha   = $request->get('nombre_ficha');
        $cg->tipo_formacion = $request->get('tipo_formacion');
        if ($cg->save()){
            return redirect('/admin/class_group')->with('status', 'La ficha '.$cg->nombre_ficha.' fue modificado con éxito');
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
        Class_group::destroy($id);
        return redirect('/admin/class_group')->with('status', 'La ficha fue eliminada con éxito');
    }

    public function import(Request $request)
    {
        if($request->file('imported-file'))
        {
            $path = $request->file('imported-file')->getRealPath();
            $data = \Excel::load($path, function($reader)
            {})->get();

            if(!empty($data) && $data->count())
            {
                foreach ($data->toArray() as $row)
                {
                    if(!empty($row))
                    {
                        $dataArray[] =
                        [
                            'id_ficha' => $row['id_ficha'],
                            'nombre_ficha' => $row['nombre_ficha'],
                            'fecha_inicio' => date('Y-m-d', strtotime($row['fecha_inicio'])),
                            'tipo_formacion' => $row['tipo_formacion']

                        ];
                    }
                }
                if(!empty($dataArray))
                {
                    Class_group::insert($dataArray);
                    return back();
                }
            }
        }
    }
}
