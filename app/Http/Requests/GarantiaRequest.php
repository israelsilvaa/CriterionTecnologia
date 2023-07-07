<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GarantiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'numero_serie' => 'required|min:3|exists:produtos,numero_serie'  
        ];
    }
}
