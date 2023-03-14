<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QcommentResource extends JsonResource
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
            'id'=> $this->id ,
            'qcomment_body'=> $this->qcomment_body,
            'instructor_id'=>$this->instructor_id,
            'instructor_name'=>$this->instructor->user->name,
            'instructor_rate'=>$this->instructor->rate,
            'question_id'=>$this->question_id,
            'replis'=>$this->reply

        ];
    }
}
