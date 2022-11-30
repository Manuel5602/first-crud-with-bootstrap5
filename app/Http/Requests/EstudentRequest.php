<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
        ];
    }
    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
/*
public function messages()
{
    return [
        'Name.required' => 'El nombre es obligatorio por que quiero',
        'Age.required' => 'Edad es requerida',
    ];
}*/
/**
 * Get custom attributes for validator errors.
 *
 * @return array
 */
public function attributes()
{
    return [
        'Name' => 'estermineitor',
    ];
}
}
