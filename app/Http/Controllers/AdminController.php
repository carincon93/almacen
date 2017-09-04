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

    public function update_system_index(){
        return view('admins.update_system');
    }

    public function truncateAll()
    {
        Schema::disableForeignKeyConstraints();
        Classroom::truncate();
        Instructor::truncate();
        ClassGroup::truncate();
        HistoryRecord::truncate();
        Schema::enableForeignKeyConstraints();

        return redirect('/admin/update_system')->with('status', 'Todos los registros de las fichas fueron eliminadas con éxito!');
    }

    public function import(Request $request)
    {
        if($request->file('imported-file'))
        {
            $path = $request->file('imported-file')->getRealPath();
            $data = Excel::selectSheets('Fichas')->load($path, function($reader)
            {
            })->get();
            if(!empty($data) && $data->count())
            {
                foreach ($data->toArray() as $row)
                {
                    if(!empty($row))
                    {
                        $dataArray[] =
                        [
                            'id_ficha' => $row['ficha'],
                            'nombre_ficha' => $row['nombre_ficha'],
                            'tipo_formacion' => $row['tipo_formacion'],
                        ];
                    }
                }
                if(!empty($dataArray))
                {
                    ClassGroup::insert($dataArray);
                }
            }

            $data2 = Excel::selectSheets('Instructores')->load($path, function($reader)
            {
            })->get();
            if(!empty($data2) && $data2->count())
            {
                foreach ($data2->toArray() as $row)
                {
                    if(!empty($row))
                    {
                        $dataArray2[] =
                        [
                            'nombre' => $row['nombre'],
                            'apellidos' => $row['apellidos'],
                            'especialidad' => $row['especialidad_ins'],
                            'vinculacion1' => $row['vinculacion'],
                            'area' => $row['area'],
                            'numero_documento' => $row['numero_documento_ins'],
                            'celular' => $row['celular'],
                            'email' => $row['correo_electronico'],
                        ];
                    }
                }
                if(!empty($dataArray2))
                {
                    Instructor::insert($dataArray2);
                }
            }

            $data3 = Excel::selectSheets('Ambientes')->load($path, function($reader)
            {
            })->get();
            if(!empty($data3) && $data3->count())
            {
                foreach ($data3->toArray() as $row)
                {
                    if(!empty($row))
                    {
                        $dataArray3[] =
                        [
                            'nombre_ambiente' => $row['nombre_ambiente'],
                            'centro' => $row['centro'],
                            'tipo_ambiente' => $row['tipo_ambiente'],
                            'movilidad' => $row['movilidad'],
                            'estado' => $row['estado'],
                            'cupo' => $row['cupo'],
                        ];
                    }
                }
                if(!empty($dataArray3))
                {
                    Classroom::insert($dataArray3);
                    return redirect('/admin/update_system')->with('status', 'Se ha importado el archivo con éxito!');
                }
            }
        }
    }
}
