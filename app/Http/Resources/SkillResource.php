<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {






        return [
            'skill_id'=>$this->id,
             'skill'=> $this->name,
            //    'instructor'=>  InstructorResource::collection($this->instructor)    
              

        ];
    }
}
