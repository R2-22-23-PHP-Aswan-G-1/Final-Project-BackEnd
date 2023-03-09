<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'service_id'=>['required','exists:App\Models\Service,id'],
            'appointment'=>['required'],
            'track_id' => ['required','exists:App\Models\Supertrack,id']
        ];

    }

    public function messages(){
        return [
            'price.required'=> 'The Filed Price Is Required',
            'service_id.required'=> 'The Filed service_id Is Required' ,
            'service_id.exists'=> 'The Filed service_id is not valid' ,
            'track_id.required'=> 'The Filed track_id Is Required',
            'track_id.exists'=> 'The Filed track_id is not valid' ,
            'appointment.required'=> 'The Filed appointment Is Required',
        ];
    }
}
