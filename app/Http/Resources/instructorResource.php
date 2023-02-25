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
            // 'id' => $this->id,
            // 'name' => $this->name,
            // 'rate' => $this->instructor->rate,
            // 'email' => $this->email,
            // 'role' => $this->role->name,
            // 'token'=> $this->createToken($this->email)->plainTextToken,
            'skills'=> SkillResource::collection($this->skills),

        ];    }
}
