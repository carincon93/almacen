<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use App\file;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataFile = File::all()->sortBy('id_ficha');
        return view('files.index')->with('dataFile', $dataFile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request)
    {
        $fi = new file();
        $fi->id_ficha       = $request->get('id_ficha');
        $fi->nombre_ficha   = $request->get('nombre_ficha');
        $fi->tipo_formacion = $request->get('tipo_formacion');
        if ($fi->save()){
            return redirect('/admin/file')->with('status', 'La ficha '.$fi->nombre_ficha.' fue adicionada con éxito');
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
        return view('files.show')->with('file', file::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fi = File::find($id);
        return view('files.edit')
            ->with('fi', $fi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FileRequest $request, $id)
    {
        $fi = file::find($id);
        $fi->id_ficha = $request->get('id_ficha');
        $fi->nombre_ficha   = $request->get('nombre_ficha');
        $fi->tipo_formacion       = $request->get('tipo_formacion');
        if ($fi->save()){
            return redirect('/admin/file')->with('status', 'La ficha '.$fi->nombre_ficha.' fue modificado con éxito');
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
        file::destroy($id);
        return redirect('/admin/file')->with('status', 'La ficha fue eliminada con éxito');
    }
    public function ajaxsearch(Request $request)
    {
        $query = file::file($request->get('id_ficha'))->orderBy('id', 'ASC')->get();
        return view('files.fileajx', compact('query'));
    }
}
