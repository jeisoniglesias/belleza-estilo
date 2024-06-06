<?php

namespace App\Http\Requests\productos;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
     'atributos' => 'nullable|array',    
            'atributos.*.nombre' => 'required|string',
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255|unique:productos,nombre',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'sub_categoria_id' => 'nullable|exists:sub_categorias,id',
            'public_target_id' => 'nullable|exists:public_target,id',
            'thumbnail' => 'required|image|max:2048',
            'urls_imagenes' => 'nullable|array',
            'urls_imagenes.*' => 'string|url',


        ];
    }
}
