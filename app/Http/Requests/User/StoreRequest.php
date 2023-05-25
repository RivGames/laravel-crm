<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:5', 'max:25'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:64', 'confirmed'],
            'role_id' => ['required', 'integer', Rule::in([1, 2, 3])]
        ];
    }
}
