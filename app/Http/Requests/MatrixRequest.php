<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class MatrixRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'category' => 'required',
            'description' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'category.required' => 'Category wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.'
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'code' => 422,
            'message' => 'check your validation',
            'errors' => $validator->errors()
        ]));
    }
}
