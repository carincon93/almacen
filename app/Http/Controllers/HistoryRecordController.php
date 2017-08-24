<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HistoryRecord;

class HistoryRecordController extends Controller
{
    protected $dataHistoryR = [];

    public function __construct()
    {
        $this->middleware('auth')->except('store', 'agregar_novedad');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $dataHistoryR = HistoryRecord::orderBy('prestado_en', 'DESC')->paginate(15);
        return view('history_records.index')->with('dataHistoryR', $dataHistoryR);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataHistoryR = new HistoryRecord();
        $dataHistoryR->classgroup_id      = $request->get('classgroup_id');
        $dataHistoryR->instructor_id  = $request->get('instructor_id');
        $dataHistoryR->classroom_id   = $request->get('classroom_id');
        $dataHistoryR->prestado_en    = $request->get('prestado_en');
        

        $dataHistoryR->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HistoryRecord::destroy($id);
        return redirect('/admin/history_record')->with('status', 'Este registro fue eliminado del historial con éxito');
    }

    public function agregar_novedad(Request $request, $fecha_prestamo)
    {
        $dataHistoryR = HistoryRecord::where('prestado_en', '=', $fecha_prestamo)->first();
        $dataHistoryR->entregado_en = date('Y-m-d H:i:s');
        $dataHistoryR->novedad      = $request->get('novedad');
        $dataHistoryR->save();
    }

    public function agregar_nueva_novedad(Request $request, $id)
    {
        $dataHistoryR = HistoryRecord::where('id', '=', $id)->first();
        $dataHistoryR->novedad_nueva = $request->get('novedad_nueva');
        if ($dataHistoryR->save()){
            return redirect('/admin/history_record')->with('status', 'La nueva novedad fue adicionada con éxito');
        }
    }

    public function obtener_novedad(Request $request)
    {
        $query = HistoryRecord::id($request->get('id'))->get();
            return view('history_records.novedadajax')->with('query', $query);
    }
}
