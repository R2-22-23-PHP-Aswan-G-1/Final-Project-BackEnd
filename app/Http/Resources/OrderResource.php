<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'service_name'=>$this->service->name,
            'service_id'=>$this->service->id ,
            'track_name'=>$this->track->name ,
            'appointment'=>$this->appointment,
            'instructor_id'=>$this->instructor->id,
            'user_name'=>$this->user->name
        ];

    }
}
