<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // return [
        //     //
        // ];
         function rules(): array
        {
            return [
                'question_body' => ['required'],
                "subtrack_id" =>['required']

            ];
        }
         function messages(){
            return [
                'question_body.required'=> 'The Filed Body Is Required',
                'subtrack_id.required' =>  "should not leave ubtrack field is empty"
            ];
        }
    }
}
