<?php

namespace App\Http\Resources;
// use App\Http\Resources\instructorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use  App\Http\Resources\instructorResource;
use App\Http\Resources\userResource;
class TestimonialResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return  [
            'testimonial_id'=>$this->id,
             'body'=> $this->body,
             'rate'=> $this->rate,
             'user_id'=>$this->user_id,
             'instructor_id'=>$this->instructor_id,
            //  'instructor'=>$this->instructors,
             'userName'=>  $this->users->name
        ];;
    }
}
