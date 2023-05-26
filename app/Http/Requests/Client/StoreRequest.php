<?php

namespace App\Http\Requests\Client;

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
            'contact_name' => ['required','max:20'],
            'contact_email' => ['required','unique:clients','email'],
            'contact_phone_number' => ['required','max:15'],
            'company_name' => ['required','max:25'],
            'company_address' => ['required','max:100'],
            'company_city' => ['required','max:25'],
            'company_zip' => ['required','integer'],
            'company_vat' => ['required','integer'],
        ];
    }
}
