<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            "question_body"=>$this->question_body,
            "user_id"=>$this->user->id ,
            "user_name"=>$this->user->name,
            "subtrack_id"=>$this->subtrack->id ,
            "subtrack_name"=>$this->subtrack->name ,
            "created_at"=>$this->created_at,
            "comment"=>$this->qcomment,
            "commentnumber"=>$this->qcomment->count('question_id'),
        ];
    }
}
