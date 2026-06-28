<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class formValidationRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:50',
            'phone_number' => 'required|string|min:11|max:11',
            'email' => 'required|string|email:rfc,dns',
        ];
    }
    public function messages(): array
    {
        return [
            'name' => 'tomar nam likho',
            'phone_number' => '11 ta digit bolod',
            'email' => 'ei domain er kono email nai bolod soda',
        ];
    }
}
