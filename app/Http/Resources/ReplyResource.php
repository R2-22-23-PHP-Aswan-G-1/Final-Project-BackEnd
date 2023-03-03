<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            "id" => $this->id ,
            "reply_body"=>$this->reply_body,
            "user_id"=>$this->user->id ,
            "user_name"=>$this->user->name,
            "qcomment_id"=>$this->qcomment->id ,
            "created_at"=>$this->created_at
        ];
    }
}
