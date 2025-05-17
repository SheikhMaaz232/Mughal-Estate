<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'group_id' => 'required|integer',
            'company_id' => 'required|integer',
            'name_en' => 'required|string|max:255',
            'name_ur' => 'required|string|max:255',
            'project_code' => 'required|string|max:255|unique:projects',
            'debit_code' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ur' => 'required|string|max:255',
            'phase_en' => 'required|string|max:255',
            'phase_ur' => 'required|string|max:255',
            'address_en' => 'required|string',
            'address_ur' => 'required|string|max:255',
            'phase_map' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'group_id.required' => 'Group is required.',
            'group_id.integer' => 'Group must be a valid ID.',

            'company_id.required' => 'Company is required.',
            'company_id.integer' => 'Company must be a valid ID.',

            'name_en.required' => 'English name is required.',
            'name_en.string' => 'English name must be a valid string.',
            'name_en.max' => 'English name must not exceed 255 characters.',

            'name_ur.required' => 'Urdu name is required.',
            'name_ur.string' => 'Urdu name must be a valid string.',
            'name_ur.max' => 'Urdu name must not exceed 255 characters.',

            'project_code.required' => 'Project code is required.',
            'project_code.string' => 'Project code must be a valid string.',
            'project_code.max' => 'Project code must not exceed 255 characters.',
            'project_code.unique' => 'This project code already exists.',

            'debit_code.required' => 'Debit code is required.',
            'debit_code.string' => 'Debit code must be a valid string.',
            'debit_code.max' => 'Debit code must not exceed 255 characters.',

            'description_en.required' => 'English description is required.',
            'description_en.string' => 'English description must be a valid string.',

            'description_ur.required' => 'Urdu description is required.',
            'description_ur.string' => 'Urdu description must be a valid string.',
            'description_ur.max' => 'Urdu description must not exceed 255 characters.',

            'phase_en.required' => 'English phase is required.',
            'phase_en.string' => 'English phase must be a valid string.',
            'phase_en.max' => 'English phase must not exceed 255 characters.',

            'phase_ur.required' => 'Urdu phase is required.',
            'phase_ur.string' => 'Urdu phase must be a valid string.',
            'phase_ur.max' => 'Urdu phase must not exceed 255 characters.',

            'address_en.required' => 'English address is required.',
            'address_en.string' => 'English address must be a valid string.',

            'address_ur.required' => 'Urdu address is required.',
            'address_ur.string' => 'Urdu address must be a valid string.',
            'address_ur.max' => 'Urdu address must not exceed 255 characters.',

            'phase_map.string' => 'Phase map must be a valid string.',
            'phase_map.max' => 'Phase map must not exceed 255 characters.',
        ];
    }

}