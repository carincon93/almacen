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
               'numero_documento'=>'required',
               'area'=>'required',
               'ip'=>'required',
               'celular'=>'required',
               'email'=>'required',
               'instructor_type_id'=>'required'

            ];
    }
    public function messages()
    {
         return [
            'nombre.required'=>'El campo Nombre es requerido',
            'apellidos.required'=>'El campo apellidos es requerido',
            'numero_documento.required'=>'El campo documento es requerido',
            'area.required'=>'El campo area es requerido',
            'ip.required'=>'El campo ip es requerido',
            'celular.required'=>'El campo celular es requerido',
            'email.required'=>'El campo correo es requerido',
            'instructor_type_id.required'=>'El campo instructor_type es requerido'
        ];
    }
}
