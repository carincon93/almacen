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
        if ($this->method()=='PUT') {

            return [
               'nombre'=>'required|max:64',
               'apellidos'=>'required|max:64',
               'numero_documento'=>'required|max:10',
               'area'=>'required|max:128',
               'ip'=>'required|max:5',
               'telefono'=>'max:7',
               'celular'=>'required|max:10',
               'email'=>'required|unique:instructors,id,:id',
               'instructor_type_id'=>'required'

            ];
        }
        else {
            return [
               'nombre'=>'required|max:64',
               'apellidos'=>'required|max:64',
               'numero_documento'=>'required|max:10',
               'area'=>'required|max:128',
               'ip'=>'required|max:5',
               'telefono'=>'max:7',
               'celular'=>'required|max:10',
               'email'=>'required|unique:instructors',
               'instructor_type_id'=>'required'

            ];
        }
        
    }
    public function messages()
    {
         return [
            'nombre.required'=>'El campo nombre es requerido',
            'nombre.max'=>'El campo nombre debe tener como máximo 64 caracteres',
            'apellidos.required'=>'El campo apellidos es requerido',
            'apellidos.max'=>'El campo apellidos debe tener como máximo 64 caracteres',
            'numero_documento.required'=>'El campo documento es requerido',
            'numero_documento.max'=>'El campo documento debe tener como máximo 10 numeros',
            'area.required'=>'El campo área es requerido',
            'area.max'=>'El campo área debe tener como máximo 128 caracteres',
            'ip.required'=>'El campo IP es requerido',
            'ip.max'=>'El campo IP debe tener como máximo 5 numeros',
            'telefono.max'=>'El campo teléfono debe tener como máximo 7 numeros',
            'celular.required'=>'El campo celular es requerido',
            'celular.max'=>'El campo celular debe tener como máximo 10 numeros',
            'email.required'=>'El campo correo electrónico es requerido',
            'email.unique'=>'Este correo electrónico ya existe',
            'instructor_type_id.required'=>'El campo tipo de instructor es requerido'
        ];
    }
}
