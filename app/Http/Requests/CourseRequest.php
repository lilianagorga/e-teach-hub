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
//        if($this->isMethod($this->post()))
//            return [
//                'name' => 'required|string|max:255',
//                'seats' => 'required|integer|between:1,99',
//                'subject_id' => 'required|exists:subjects,id',
//            ];
//        return [
//            'name' => 'required|string|max:255',
//        ];
        return [
            'name' => 'required|string|max:255',
            'seats' => 'required|integer|between:1,99',
            'subject_id' => 'required|exists:subjects,id',
        ];
    }

}
