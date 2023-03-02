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
            'email' => $this->user->email,
            'role' => $this->user->role->name,
            'certificates'=>$this->certificates,
            'posts'=>$this->posts,
            'skills'=>$this->skills,
            'token'=> $this->user->createToken($this->user->email)->plainTextToken,

        ];    }
}
