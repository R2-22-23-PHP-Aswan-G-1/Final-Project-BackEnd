<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PostCommentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $user_id = Auth::id();
        $flag = false;
        if ($user_id == $this->user_id) {
            $flag = true;
        }
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'userId' => $this->user_id,
            'user_image' => $this->user->image,
            'userName' => $this->user->name,
            'body' => $this->body,
            'postId' => $this->post_id,
            'flag' => $flag,
        ];
    }
}
