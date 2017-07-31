<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
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
               'nombre_ambiente'=>'required',
               'tipo_ambiente'=>'required',
               'movilidad'=>'required',
               'estado'=>'required',
               'cupo'=>'required'
            ];
    }
    public function messages()
    {
         return [
            'nombre_ambiente.required'=>'El campo Nombre de ambiente es requerido',
            'nombre_ambiente.min'=>'El campo Nombre de ambiente no puede tener menos de 5 caracteres',
            'tipo_ambiente.required'=>'El campo Tipo de ambiente es requerido',
            'tipo_ambiente.min'=>'El campo Nombre no puede tener menos de 5 caracteres',
            'movilidad.required'=>'El campo Movilidad es requerido',
            'estado.required'=>'El campo Estado es requerido',
            'cupo.required'=>'El campo Cupo es requerido'
        ];
    }
}