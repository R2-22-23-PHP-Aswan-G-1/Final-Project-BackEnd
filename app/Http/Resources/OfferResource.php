<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'offer_id'=>$this->id,
            'instructor_id'=>$this->instructor_id,
            'instructor_name'=>$this->instructor->user->name,
            'order'=>$this->order->user->id,
        ];
    }
}
