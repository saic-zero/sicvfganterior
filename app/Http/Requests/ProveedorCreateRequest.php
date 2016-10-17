<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class ProveedorCreateRequest extends Request
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

            'nombreProv'=>'required|unique:proveedors',
            'RUC'=>'required|unique:proveedors',
            'correoProv'=>'required|unique:proveedors',
            'telefonoProv'=>'required|unique:proveedors',
         ];
    }



    public function messages(){
       return [
         
         'RUC.unique' => '¡Al parecer el Número de Registro de Comercio(NRC) ya esta asociado a otra empresa!',
         'nombreProv.unique' => '¡Al parecer el Nombre de la Empresa ya existe!',
         'correoProv.unique' => '¡Al parecer el Correo Eléctronico ya esta asociado a otra empresa!',
         'telefonoProv.unique' => '¡Al parecer el Celular de la Empresa ya existe!',
         
     ];
     }
}
