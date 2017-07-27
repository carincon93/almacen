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
        return false;
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
               'documento'=>'required',
               'area'=>'required',
               'ip'=>'required',
               'celular'=>'required',
               'correo'=>'required'
            ];
    }
    public function messages()
    {
         return [
            'nombre.required'=>'El campo nombre es requerido',
            'apellidos.required'=>'El campo apellidos es requerido',
            'documento.required'=>'El campo documento es requerido',
            'area.required'=>'El campo area es requerido',
            'ip.required'=>'El campo ip es requerido',
            'celular.required'=>'El campo celular es requerido',
            'correo.required'=>'El campo correo es requerido'
        ];
    }
}
