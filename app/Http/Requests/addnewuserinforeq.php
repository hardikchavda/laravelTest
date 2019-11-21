<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addnewuserinforeq extends Request
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
            'prfileimg'  => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
        ];
    }
}
