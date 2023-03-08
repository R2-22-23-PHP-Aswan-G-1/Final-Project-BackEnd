<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'instructor_id'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
}
