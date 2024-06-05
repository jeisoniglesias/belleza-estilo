<?php

namespace App\Http\Requests\tipos;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubCategoriasRequest extends FormRequest
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
        //
        return [
            'nombre' => 'required|string|max:255|unique:sub_categorias,nombre,' . $this->subCategoria->id . ',id',
            'categoria_id' => 'required|exists:categorias,id'
        ];
    }
}