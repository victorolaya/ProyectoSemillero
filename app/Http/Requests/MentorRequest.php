<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MentorRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /*
    *De false a true para asi poder utilizarlo
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
           'nombres' => 'min:3|max:120|required',
           'apellidos' => 'min:3|max:120|required',
           'documento_de_identidad' => 'required',
           'numero_documento' => 'min:7|max:10|required|unique:mentores',
           'edad' => 'required',
           'direccion' => 'min:3|max:120|required',
           'municipio' => 'min:3|max:120|required',
           'numero_movil' => 'min:10|max:14|required',
           'correo_electronico' => 'min:9|max:250|required|unique:mentores',
           'eps' => 'min:3|max:30|required',
           'rh' => 'min:2|max:3|required',
           'areas_id' => 'required'
        ];
    }
}
