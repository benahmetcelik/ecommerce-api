<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class RegisterRequest extends FormRequest
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
        return [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'username' => 'required|unique:users,username',
            ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'name' => trim($this->name),
            'email' => trim(strtolower($this->email)),
            'password' => trim($this->password),
            'username' => trim(strtolower($this->name)).'_'.Str::random(4).rand(1,1000),
        ]);
    }
}
