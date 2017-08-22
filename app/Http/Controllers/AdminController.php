<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;


use App\Classroom;
use App\ClassGroup;
use App\Instructor;
use App\HistoryRecord;
use App\User;
use Auth;
use Excel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $dataS1  = Classroom::all()->where('nombre_ambiente', 'sistemas 1')->where('disponibilidad', '=', 'no disponible')->first();
        $dataS3  = Classroom::all()->where('nombre_ambiente', 'sistemas 3')->where('disponibilidad', '=', 'no disponible')->first();
        $dataMeta  = Classroom::all()->where('nombre_ambiente', 'metalografia')->where('disponibilidad', '=', 'no disponible')->first();
        $dataMante  = Classroom::all()->where('nombre_ambiente', 'mantenimiento')->where('disponibilidad', '=', 'no disponible')->first();
        $dataMeca  = Classroom::all()->where('nombre_ambiente', 'mecanizado')->where('disponibilidad', '=', 'no disponible')->first();
        return view('admins.admin', compact('dataS1', 'dataS3', 'dataMeta'));
    }

    public function redirect()
    {
        return redirect('admin/dashboard');
    }

    public function password(){
        return View('admins.password');
    }
    public function updatePassword(PasswordRequest $request){
        $admin = Auth::User();
        if (Hash::check($request->mypassword, $admin->password)){
            $admin2 = new User();
            $admin2->where('email', '=', $admin->email)
                 ->update(['password' => bcrypt($request->password)]);
            return redirect('admin')->with('status', 'Contraseña cambiada con éxito');
        }
        else
        {
            return redirect('admin/password')->with('message', 'Su contraseña actual es incorrecta');
        }
    }

    public function truncateAll()
    {
        Schema::disableForeignKeyConstraints();
        Classroom::truncate();
        Instructor::truncate();
        ClassGroup::truncate();
        Schema::enableForeignKeyConstraints();
        // HistoryRecord::truncate();
        return redirect('/admin/dashboard')->with('status', 'Todos los registros de las fichas fueron eliminadas con éxito!');
    }
    public function import(Request $request)
    {
        $path = $request->file('imported-file')->getRealPath();
        Excel::load($path, function($reader) {

            
        });
    }
}
