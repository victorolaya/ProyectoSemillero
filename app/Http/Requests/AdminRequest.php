<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminRequest extends Request
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
     * del administrador
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'min:4|max:25|required',
            'email' => 'min:4|max:20|required',
            'password' => 'min:6|max:20|required'
        ];
    }
}
