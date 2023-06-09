<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'description' => ['required', 'min:25', 'max:125'],
            'user_id' => ['required', 'integer'],
            'client_id' => ['required', 'integer'],
            'project_id' => ['required', 'integer'],
            'deadline' => ['required', 'date'],
            'status' => ['required'],
        ];
    }
}
