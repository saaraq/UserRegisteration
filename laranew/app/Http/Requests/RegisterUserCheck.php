<?php

namespace App\Http\Request;
use Illuminate\Http\Request;
use App\Http\Requests;


class RegisterUserCheck extends Request
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
        return ['FirstName'=>'required',
            'LastName'=>'required',
            'userName'=>'required',
            'email'=>'required',
            'password'=>'required',

        ];
    }
}
