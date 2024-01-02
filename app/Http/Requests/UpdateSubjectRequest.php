<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'lecturer_id' => 'required|string',
            'semester' => 'required|string',
            'academic_year' => 'required|string',
            'sks' => 'required|integer',
            'code'  => 'required|string|max:8',
            'description' => 'string', 
        ];
    }
}