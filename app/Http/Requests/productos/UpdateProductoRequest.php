<?php

namespace App\Http\Requests\productos;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'nombre' => 'string|max:255|unique:productos,nombre,' . $this->route('producto')->id . ',id',
            'descripcion' => 'nullable|string',
            'precio' => 'numeric',
            'stock' => 'integer',
            'sub_categoria_id' => 'nullable|exists:sub_categorias,id',
            'public_target_id' => 'nullable|exists:public_target,id',
            'urls_imagenes' => 'nullable|array',
            'urls_imagenes.*' => 'string|url',
            'thumbnail' => 'nullable|image|max:2048',

        ];
    }
}
