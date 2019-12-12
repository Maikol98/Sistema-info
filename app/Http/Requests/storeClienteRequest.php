<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeClienteRequest extends FormRequest
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
            'CiCliente' =>'required|integer',
            'nombre' => 'required|string',
            'direccion'=>'required|string',
            'telefono'=> 'required|integer',
            'correo'=>'email',
            'id_Distrito'=>'required|integer',
            'Ciudad'=>  'required|string'
        ];
    }
}
