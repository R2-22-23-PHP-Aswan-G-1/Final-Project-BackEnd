<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replay extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body',
        'created_at',
        'user_id',
        'comment_id',

    ];

    public function user(){
        $this->belongsTo(Users::class);
    }
    public function comment(){
        $this->belongsTo(Comment::class);
    }
}
