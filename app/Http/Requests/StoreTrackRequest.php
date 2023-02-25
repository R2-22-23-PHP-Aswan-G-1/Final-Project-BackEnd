<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrackRequest extends FormRequest
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
            'name' => ['required'],
            'subTrackIds' => ['required','exists:App\Models\Subtrack,id'],
        ];
    }
    public function messages()
    {
        return
            [
                'name.required' => 'The Name Field Is Required',
                'subTrackIds.unique' => 'Is Required',
            ];
    }
}
