<?php

namespace App\Http\Requests\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class FilterLessonRequest extends FormRequest
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
            'subject_id' => "nullable|integer|exists:subjects,id",
            'student_id' => "nullable|integer|exists:students,id",
            'price' => 'nullable|numeric',
            'isPaid' => 'nullable|boolean',
        ];
    }
}
