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
       
        return [
            'id'=>$this->id,
            'service_name'=>$this->service->name,
            'service_id'=>$this->service->id ,
            'track_name'=>$this->track->name ,
            'price'=>$this->price,
            'appointment'=>$this->appointment,
            'instructor'=> new instructorResource($this->instructor),
            'user_name'=>$this->user->name,
            'offers'=> OfferResource::collection($this->offers)
        ];

    }
}
