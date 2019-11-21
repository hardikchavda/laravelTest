<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class adduserrequest extends Request
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
            'fullname' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required'            
        ];
    }

    public function messages()
    {
        return [
            'required'=>':attribute is compulsory',
            // 'fullname.required' => ':attribute must be filled.',
            // 'fullname.alpha' => ':attribute must be Alphabets.',
            // 'email.required' => ':attribute must be filled.',
            // 'password.required' => ':attribute must be filled.'
        ];
    }
}
