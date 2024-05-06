<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserFormRequest extends FormRequest
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
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'los nombres son requeridos',
            'name.min' => 'Los nombres son muy cortos',
            'email.required' => "El campo email es requerido",
            'email.email' => "El campo email debe ser un correo electronico",
            'email.unique' => 'Correo ya se encuentra registrado',
            'password.required' => 'El campo contraseña es requerida',
            'password.min' => 'Debe tener un minimo de :min parametros'
        ];
    }
}
