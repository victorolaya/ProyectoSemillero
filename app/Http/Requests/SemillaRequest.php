<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SemillaRequest extends Request
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
     * Metodo que permite la validacion de los campos
     * de las semillas
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'min:4|max:30|required',
            'apellidos' => 'min:4|max:30|required',
            'edad' => 'required',
            'documento' => 'required',
            'numero' =>'min:8|max:15|required',
            'direccion' => 'min:6|max:30|required',
            'telefono' => 'min:7|max:15|required',
            'celular1' => 'min:10|max:15|required',
            'celular2' => 'min:10|max:15|required',
            'correoElectronico' =>'min:4|max:250|required'
        ];
    }
}
