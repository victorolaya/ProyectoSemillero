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
<<<<<<< HEAD
           'apellidos' => 'min:3|max:120|required',
           'area_id' => 'required'
=======
           'apellidos' => 'min:3|max:120|required'
>>>>>>> 3ee7d56b88377542113883cdbec0a926248156de
        ];
    }
}
