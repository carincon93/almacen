<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
            return [
               'nombre'=>'required',
               'apellidos'=>'required',
               'numero_documento'=>'required|max:10',
               'area'=>'required',
               'ip'=>'required|max:5',
               'telefono'=>'max:7',
               'celular'=>'required|max:10',
               'email'=>'required|unique:instructors',
               'instructor_type_id'=>'required'

            ];
    }
    public function messages()
    {
         return [
            'nombre.required'=>'El campo Nombre es requerido',
            'apellidos.required'=>'El campo Apellidos es requerido',
            'numero_documento.required'=>'El campo Documento es requerido',
            'numero_documento.max'=>'El campo Documento debe tener como maximo 10 numeros',
            'area.required'=>'El campo Area es requerido',
            'ip.required'=>'El campo Ip es requerido',
            'ip.max'=>'El campo Ip debe tener como maximo 5 numeros',
            'telefono.max'=>'El campo Telefono debe tener como maximo 7 numeros',
            'celular.required'=>'El campo Celular es requerido',
            'celular.max'=>'El campo Celular debe tener como maximo 10 numeros',
            'email.required'=>'El campo Correo es requerido',
            'email.unique'=>'este Correo ya existe',
            'instructor_type_id.required'=>'El campo Tipo de instructor es requerido'
        ];
    }
}
