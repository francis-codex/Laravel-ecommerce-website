<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSignup2VerifyRequest extends FormRequest
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
            'Full_name' =>'required|max:50',
            'Email' =>'required|email|unique:users',
            'Password' =>'required|max:15',
            'Phone' =>'required|max:13'

        ];
    }
}
