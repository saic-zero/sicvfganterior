<?php

namespace SICVFG\Http\Requests;

use SICVFG\Http\Requests\Request;

class VendedorUpdateRequest extends Request
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

                 'DUIVen'=>'required|unique:vendedors',
         ];
    }
}