<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class PresentacionCreateRequest extends Request
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

            'nombrePre'=>'required|unique:presentaciones',
            'equivale'=>'required|unique:presentaciones',
            
         ];
    }



    public function messages(){
       return [
         
         'equivale.unique' => '¡La  equivalencia en unidades ya fue asignada a otra Presentación!',
         'nombrePre.unique' => '¡Al parecer el Nombre de la Presentación ya existe!',
         
     ];
     }
}
