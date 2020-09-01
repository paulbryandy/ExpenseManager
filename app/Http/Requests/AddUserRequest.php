<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Name should not be greater than 255 characters.',
            'password.max' => 'Password should contain minimum of 8 characters..',
        ];
        
    }
}
