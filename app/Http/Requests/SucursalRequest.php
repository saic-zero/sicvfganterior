<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class SucursalRequest extends Request
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
          'nombreSuc'=>'unique:sucursals',
          'telefonoSuc'=>'unique:sucursals',
        ];
    }

    public function messages(){
      return [
        'nombreSuc.unique' => '¡El nombre de la sucursal ya existe por favor digite un nuevo nombre!',
        'telefonoSuc.unique' => '¡Este número de teléfono ya ha sido asignado!',
    ];
    }
}
