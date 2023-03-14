<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $user_id = Auth::id();
        $flag = false;
        if ($user_id == $this->instructor_id) {
            $flag = true;
        }
        return [
            'id' => $this->id,
            'body' => $this->body,
            'created_at' => $this->created_at,
            'flag' => $flag,
            'insructor-creator' => $this->instructor_id,
            'user-image' => $this->instructor->user->image,
            'comments' => PostCommentResource::collection($this->comments)
        ];
    }
}
