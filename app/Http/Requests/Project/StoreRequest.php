<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

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
            'title' => ['required', 'min:5', 'max:25'],
            'description' => ['required', 'min:10', 'max:50'],
            'user_id' => ['required', 'integer'],
            'client_id' => ['required', 'integer'],
            'deadline' => ['required', 'date'],
            'status' => ['required'],
        ];
    }
}
