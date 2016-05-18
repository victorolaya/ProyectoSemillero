<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GrupoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /*
    * De false a true para asi poder utilizarlo
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
     /*
     *Agrego las siguintes reglas, que el nombre del area debe de ser de minimo 3 caracteres y maximo de 120
     *que debe de ser obligatorio diligenciarlo, y que su nombre debe de ser Unico.
     */
    public function rules()
    {
        return ['nombre' => 'min:1|max:120|required'];
    }
}
