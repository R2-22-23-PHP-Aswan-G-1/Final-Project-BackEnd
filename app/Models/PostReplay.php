<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostReplay extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'user_id',
        'post_id',
    ];

    public function Post(){
        return $this->belongsTo(Post::class,);
    }
}
