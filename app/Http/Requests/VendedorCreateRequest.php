<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class VendedorCreateRequest extends Request
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
            'nombreVen'=>'required|unique:vendedors',
            'DUIVen'=>'required|unique:vendedors',
            'correoVen'=>'required|unique:vendedors',
            'telefonoVen'=>'required|unique:vendedors',
           ];
    }



    public function messages(){
       return [
         
         'DUIVen.unique' => '¡Al parecer el Documento Único de Identidad(DUI) ya esta asociado a otr@ contact@!',
         'nombreVen.unique' => '¡Al parecer el Nombre del Contacto ya existe!',
         'correoVen.unique' => '¡Al parecer el Correo Eléctronico ya esta asociado a otra empresa!',
         'telefonoVen.unique' => '¡Al parecer el Celular de la Empresa ya existe!',
         
     ];
     }
}
