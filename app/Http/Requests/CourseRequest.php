<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('put'))
        {
            return [
                'name' => 'required|string|max:255',
                'seats' => 'required|integer|between:1,99',
                'subject_id' => 'required|exists:subjects,id',
            ];
        } else if ($this->isMethod('post'))
        {
            return [
                'name' => 'required|string|max:255',
                'seats' => 'required|integer|between:1,99',
                'subject_id' => 'required|exists:subjects,id',
            ];
        } else
        {
            return ['name' => 'required|string|max:255'];
        }
    }

}
