<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            'id_ficha' => 'required|max:8',
            'nombre_ficha'=>'required',
            'tipo_formacion'=>'required',
        ];
    }
    public function messages()
    {
         return [
            'id_ficha.required'=>'El campo ID  de ficha es requerido',
            'id_ficha.max'=>'El campo ID de ficha debe tener como máximo 8 caracteres',
            'nombre_ficha.required'=>'El campo nombre de ficha es requerido',
            'tipo_formacion.required'=>'El campo tipo de formacion es requerido',
        ];
    }
}
