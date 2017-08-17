<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\PasswordRequest;
use Auth;
use App\Admin;
use App\Classroom;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAdmin = Admin::all()->sortBy('name');
        return view('admins.index')->with('dataAdmin', $dataAdmin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $ad = new Admin();
        $ad->name = $request->get('name');
        $ad->email = $request->get('email');
        $ad->password = bcrypt($request->get('password'));
        if ($ad->save()){
            return redirect('/admin/admin')->with('status', 'El administrador fue adicionada con éxito');
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
        return view('admins.show')->with('dataAdmin', Admin::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Admin::find($id);
        return view('admins.edit')
            ->with('ad', $ad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
        $ad = Admin::find($id);
        $ad->name = $request->get('name');
        $ad->email = $request->get('email');
        $ad->password = bcrypt($request->get('password'));
        if ($ad->save()){
            return redirect('/admin/admin')->with('status', 'El administrador fue modificado con éxito');
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
        Admin::destroy($id);
        return redirect('/admin/admin')->with('status', 'el administrador fue eliminado con éxito');
    }


    public function prestamos_plano()
    {
        $dataS1  = Classroom::all()->where('nombre_ambiente', 'sistemas 1')->where('disponibilidad', '=', 'no disponible')->first();
        $dataS3  = Classroom::all()->where('nombre_ambiente', 'sistemas 3')->where('disponibilidad', '=', 'no disponible')->first();
        $dataMeta  = Classroom::all()->where('nombre_ambiente', 'metalografia')->where('disponibilidad', '=', 'no disponible')->first();
        $dataMante  = Classroom::all()->where('nombre_ambiente', 'mantenimiento')->where('disponibilidad', '=', 'no disponible')->first();
        $dataMeca  = Classroom::all()->where('nombre_ambiente', 'mecanizado')->where('disponibilidad', '=', 'no disponible')->first();
        return view('admins.admin', compact('dataS1', 'dataS3', 'dataMeta'));
    }
    public function password(){
        return View('admins.password');
    }
    public function updatePassword(PasswordRequest $request){
            $admin = Auth::User();
            if (Hash::check($request->mypassword, $admin->password)){
                $admin2 = new Admin;
                $admin2->where('email', '=', $admin->email)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect('admin')->with('status', 'Contraseña cambiada con éxito');
            }
            else
            {
                return redirect('admin/password')->with('message', 'Su contraseña actual es incorrecta');
            }
    }
}
