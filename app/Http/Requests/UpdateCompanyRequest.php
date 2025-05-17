<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_eng' => 'required|string|max:255',
            'name_ur' => 'required|string|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name_eng.required' => 'The company english name is required',
            'name_ur.required' => 'The company urdu name is required'
        ];
    }
}