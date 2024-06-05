<?php

namespace App\Http\Requests\tipos\public;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublicTargetRequest extends FormRequest
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
            'name' => 'required|unique:public_target,name,' . $this->target->id . '|max:255',

        ];
    }
}
