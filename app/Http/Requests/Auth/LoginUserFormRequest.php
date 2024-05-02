<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LoginUserFormRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => "El campo email es requerido",
            'email.email' => "El campo email debe ser un correo electronico",
            'email.unique' => 'Correo ya se encuentra registrado',
            'password.exists' => 'El campo contraseña es requerida',
            'password.min' => 'Debe tener un minimo de :min parametros'
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $credentials = $this->only('email', 'password');

            if (!Auth::attempt($credentials)) {
                $validator->errors()->add('email', 'Credenciales incorrectas');
            }
        });
    }
}
