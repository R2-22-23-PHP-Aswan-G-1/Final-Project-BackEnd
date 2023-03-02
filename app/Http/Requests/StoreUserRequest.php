<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required','unique:App\Models\User,email'],
            'password' => ['required','min:8', 'confirmed'],
        ];
    }
    public function messages()
    {
        return
            [
                'name.required' => 'The Name Field Is Required',
                'email.required' => 'The Email Field Is Required',
                'email.unique' => 'The Email Field Is Must Be Uniqe',
                'email.min' => 'The Email Field Has Minimum 3 Characters',
                'password.required' => 'The password Field Is Required',
                'password.min' => 'The password Field Has Minimum 8 Characters',
            ];
    }
}
