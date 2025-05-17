<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainHeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name_english' => ['required', 'string', 'max:255'],
            'name_urdu' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name_en.required' => 'The English name is required.',
            'name_ur.required' => 'The Urdu name is required.',
        ];
    }
}
