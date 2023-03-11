<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class instructorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->user->name,
            'rate' => $this->rate,
            'certificates'=>$this->certificates,
            'posts'=>$this->posts,
            'skills'=>$this->skills,
            'workHistory'=>$this->workHistory,
            'language'=>languageResource::collection($this->languages),
            'track'=> new SuperTrackResource( $this->superTrack),
            'education'=>$this->education,
            'major'=>$this->major,
            'testimonials' => TestimonialResource::collection( $this->testimonials),
        ];  
    }
}
