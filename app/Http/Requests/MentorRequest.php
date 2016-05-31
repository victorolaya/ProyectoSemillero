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
           'apellidos' => 'min:3|max:120|required',
        ];
    }
}
