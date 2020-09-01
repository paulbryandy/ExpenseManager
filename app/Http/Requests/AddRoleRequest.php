<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRoleRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.max' => 'Role title should not be greater than 255 characters.',
            'description.max' => 'Role description should not be greater than 255 characters.',
        ];
        
    }
}
