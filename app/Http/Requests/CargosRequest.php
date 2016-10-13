<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class CargosRequest extends Request
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
            'nombreCargo'=>'unique:cargos',
        ];
    }

    public function messages(){
      return [
        'nombreCargo.unique' => '¡El nuevo cargo que intenta registrar ya existe porfavor digite uno nuevo!',
    ];
    }
}
