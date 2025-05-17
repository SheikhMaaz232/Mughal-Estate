<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'group_id' => 'sometimes|integer',
            'company_id' => 'sometimes|integer',
            'name_en' => 'sometimes|string|max:255',
            'name_ur' => 'sometimes|string|max:255',
            'project_code' => 'sometimes|string|max:255|unique:projects,project_code,'.$this->project->id,
            'debit_code' => 'sometimes|string|max:255',
            'description_en' => 'sometimes|string',
            'description_ur' => 'sometimes|string|max:255',
            'phase_en' => 'sometimes|string|max:255',
            'phase_ur' => 'sometimes|string|max:255',
            'address_en' => 'sometimes|string',
            'address_ur' => 'sometimes|string|max:255',
            'phase_map' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => 'The :attribute field is required.',
            '*.max' => 'The :attribute must not exceed :max characters.',
            '*.unique' => 'This :attribute already exists.',
        ];
    }
}