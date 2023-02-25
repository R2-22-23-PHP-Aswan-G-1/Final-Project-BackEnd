<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCertificateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'instructor_id' => ['required','exists:App\Models\Instructor,id'],
            'certificate'=>['required' ,'file']
        ];
    }
    public function messages()
    {
        return
            [
                'certificate.required' => 'The Certificate Field Is Required',
                'certificate.file' => 'The Certificate Must be file',
                // 'instructor_id.required' => 'Instructor Is Required',
                // 'instructor_id.exists' => 'Instructor Is not Exist',
            ];
    }
}
