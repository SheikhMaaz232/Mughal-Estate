<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Change to your authorization logic if needed
    }

    public function rules()
    {
        return [
            'name_eng' => 'required|string|max:255',
            'name_ur' => 'required|string|max:255',
            'email' => 'email|unique:companies,email',
            'phone' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'address' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name_eng.required' => 'The company english name is required',
            'name_ur.required' => 'The company urdu name is required',
            'email.unique' => 'This email is already registered',
            'logo.image' => 'The logo must be an image file',
            'logo.max' => 'The logo size should not exceed 2MB',
        ];
    }
}