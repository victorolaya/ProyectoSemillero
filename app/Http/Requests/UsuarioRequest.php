<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
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
     * Retorna un arreglo donde vamos a definir las reglas 
     * @return array
     */
    public function rules()
    {    /**Agrego las siguintes reglas, que el nombre debe de ser de minimo 3 letras y que debe de ser obligatorio diligenciarlo
            * para agregar mas reglas, las agrago separandolas con el | 
            */

        return [ 
        'name' => 'min:3|max:120|required',
        'email' => 'min:4|max:250|required|unique:users',
        'password' => 'min:4|max:120|required'
        ];
    }
}
