<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class EmpleadoCreateRequest extends Request
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
            'codEmpleado'=>'unique:empleados',
            'telefonoEmp'=>'unique:empleados',
            'DUI'=>'unique:empleados',
            'NIT'=>'unique:empleados',
            'numAFP'=>'unique:empleados',
            'numISSS'=>'unique:empleados',
        ];
    }

    public function messages(){
      return [
        'codEmpleado.unique' => '¡El Código de empleado que ha ingresa ya esta en uso !',
        'telefonoEmp.unique' => '¡Al parecer este numero de telefono ya esta registrado por otro empleado!',
        'DUI.unique' => '¡Verifique el numero de DUI ingresado al parecer ya ha sido registrado ese DUI!',
        'NIT.unique' => '¡Verifique el numero de NIT ingresado al parecer ya ha sido registrado ese NIT!',

    ];
    }
}
