<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Ensure you're already using auth middleware
    }

    public function rules(): array
    {
        return [
            'name_eng' => ['required', 'string', 'max:255'],
            'name_ur' => ['required', 'string', 'max:255'],
            'father_name_eng' => ['required', 'string', 'max:255'],
            'father_name_ur' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }
}
