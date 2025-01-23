<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetLessonsBySubjectsRequest extends FormRequest
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
            'subject_id' => 'required|exists:subjects,id',
        ];
    }

    public function messages(): array
    {
        return [
            'subject_id.exists'  => 'Предмет с таким ID не найден.',
        ];
    }
}
