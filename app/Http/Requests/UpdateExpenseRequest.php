<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpenseRequest extends FormRequest
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
            'category' => 'required|max:255',
            'amount' => 'required',
            'entry_date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category.max' => 'Category should not be greater than 255 characters.',
        ];
        
    }
}
