<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //user login resource    
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role_id'=>$this->role->id,
            'role' => $this->role->name,
        ];  
      }
}
