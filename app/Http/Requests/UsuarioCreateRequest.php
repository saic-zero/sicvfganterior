<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class UsuarioCreateRequest extends Request
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
           'name'=>'required|unique:users',
           'password'=>'required|min:6',
           'email'=>'required|email|unique:users',
           'nombre_img'=>'required',
         ];
     }

     public function messages(){
       return [
         'name.unique' => '¡Este Empleado ya posee una cuenta de usuario!',
         'name.required' => '¡Seleccione un empleado al cual se le asignara una cuenta de usuario!',
         'password.required' => '¡El campo Contraseña es obligatorio por favor llene ese campo!',
         'password.min' => 'La Contraseña debe tener como minimo seis caracteres!',

         'email.required' => '¡El campo Correo es obligatorio por favor llene ese campo!',
         'email.unique' => '¡Al parecer este correo electrónico ya esta asociado a otra cuenta!',
         'email.email' => '¡Al parecer este correo electrónico no es válido!',
         'nombre_img.required' => '¡Es necesario que cargue una imagen del empleado!',
     ];
     }
}
