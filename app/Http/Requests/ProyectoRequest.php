<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
			'nombre_proyecto' => 'required|string|regex:/^[\p{L}\s.,]+$/u|max:255',
			'inicio_proyecto' => 'required',
			'fin_proyecto' => 'required|after_or_equal:inicio_proyecto',
			'descripcion_proyecto' => 'required|string|max:255',
        ];
    }
}
