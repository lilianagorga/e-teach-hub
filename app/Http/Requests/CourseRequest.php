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
        if (in_array(strtolower($this->method()), ['post', 'put']))
        {
            return [
                'name' => 'required|string|max:255',
                'seats' => 'required|integer|between:1,99',
                'subject_id' => 'required|exists:subjects,id',
                'content' => 'sometimes|nullable|string',
            ];
        } elseif (strtolower($this->method()) == 'patch')
        {
            return [
                'name' => 'sometimes|required|string|max:255',
                'seats' => 'sometimes|required|integer|between:1,99',
                'subject_id' => 'sometimes|required|exists:subjects,id',
                'content' => 'sometimes|nullable|string',
            ];
        } else
        {
            return [];
        }
    }
}
