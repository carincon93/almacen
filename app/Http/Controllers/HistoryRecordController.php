<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\History_record;

class HistoryRecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store', 'update_history_record');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history_record = History_record::orderBy('prestado_en', 'DESC')->paginate(15);
        return view('history_records.index')->with('history_record', $history_record);
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
        $history_record = new History_record();
        $history_record->instructor_id  = $request->get('instructor_id');
        $history_record->classroom_id   = $request->get('classroom_id');
        $history_record->prestado_en    = $request->get('prestado_en');

        $history_record->save();
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
        // $no = History_record::find($id);
        // $no->novedad_nueva           = $request->get('novedad_nueva');
        // return redirect('/admin/history_record')->with('status', 'La novedad fue modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        History_record::destroy($id);
        return redirect('/admin/history_record')->with('status', 'El historial fue eliminado con éxito');
    }

    public function update_history_record(Request $request, $prestado_en)
    {
        $history_record = History_record::where('prestado_en', '=', $prestado_en)->first();
        $history_record->entregado_en = $request->get('entregado_en');
        $history_record->novedad      = $request->get('novedad');
        $history_record->save();
    }
}
