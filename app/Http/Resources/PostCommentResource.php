<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostCommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->id,
            'userId'=>$this->user_id,
            'userName'=>$this->user->name,
            'body'=>$this->body,
            'postId'=>$this->post_id,
        ];
    }
}
