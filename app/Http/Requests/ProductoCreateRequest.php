<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class ProductoCreateRequest extends Request
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

            'codProducto'=>'unique:productos',
            'nombreProd'=>'unique:productos',
         ];
    }


    public function messages(){
       return [
         
         'codProducto.unique' => '¡Al parecer el Código de Barra que intenta usar, ya esta asociado a otro producto!',
         'nombreProd.unique' => '¡El nombre del producto que intenta ingresar ya esta registrado!',
         
     ];
     }
}
