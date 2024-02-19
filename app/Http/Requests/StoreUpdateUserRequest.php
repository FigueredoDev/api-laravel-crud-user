<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $max_length = 255;

        $rules = [
            'name' => [
                'required',
                'min:3',
                'max:' . $max_length
            ],
            'email' => [
                'required',
                'email',
                'max:' . $max_length,
                'unique:users'
            ],
            'password' => [
                'required',
                'min:8',
                'max:100'
            ]
        ];

        if ($this->method() === 'PUT') {
            $rules['email'] = [
                'required',
                'email',
                'max:' . $max_length,
                Rule::unique('users')->ignore($this->id)
            ];

            $rules['password'] = [
                'nullable',
                'min:8',
                'max:100'
            ];
        }

        return $rules;
    }
}
