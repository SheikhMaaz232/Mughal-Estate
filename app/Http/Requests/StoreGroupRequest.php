<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'group_code' => 'required|string|unique:groups,group_code,' . $this->route('group'),
            'name_eng' => 'required|string|max:255',
            'name_ur' => 'required|string|max:255',
            'description_eng' => 'required|string|max:500',
            'description_ur' => 'required|string|max:500',
            'address_eng' => 'required|string|max:255',
            'address_ur' => 'required|string|max:255',
            'image' => $this->isMethod('post') ? 'image|mimes:jpg,jpeg,png|max:2048' : 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
