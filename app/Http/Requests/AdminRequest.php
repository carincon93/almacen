<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
         if ($this->method() == 'PUT') {
             return [
                 'name' => 'required',
                 'email' => 'required|email|unique:admins,id,:id',
                 'password' => 'required|min:6|confirmed',
             ];
         }
         else{
             return [
                 'name' => 'required',
                 'email' => 'required|email|unique:admins',
                 'password' => 'required|min:6|confirmed',
             ];
         }
     }
     public function messages()
     {
         return [
             'name.required'=>'El campo nombre es requerido',
             'email.required'=>'El campo correo es requerido',
             'email.email'=>'Este campo debe ser un correo valido',
             'email.unique'=>'Este correo ya existe',
             'password.required'=>'El campo contraseña es requerido',
             'password.min'=>'El campo contraseña debe tener mínimo 6 caracteres',
             'password.confirmed'=>'Debe confirmar la contraseña y la confirmacion debe coincidir con la contraseña',
         ];
     }
}
