<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AreaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   //De false, lo pasamos a true para asi poder utilizarlo
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       /**Agrego las siguintes reglas, que el nombre del area debe de ser de minimo 3 caracteres y maximo de 120
          que debe de ser obligatorio diligenciarlo, y que su nombre debe de ser Unico.*/

        return [ 
        'nombre' => 'min:3|max:120|required|unique:areas'
        ];
    }
}
