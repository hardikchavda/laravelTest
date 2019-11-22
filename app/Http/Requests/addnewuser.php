<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addnewuser extends Request
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
            'name' => 'required|alpha',
            'email' => 'required',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ':attribute field cannot be empty.',            
            'name.alpha' => ':attribute Only Alphabets Are Allowed',
        ];
    }
}
