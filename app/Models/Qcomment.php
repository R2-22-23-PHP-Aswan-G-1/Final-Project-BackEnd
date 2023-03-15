<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qcomment extends Model
{
    use HasFactory;
    protected $fillable = [
        'qcomment_body',
        'instructor_id',
        'created_at',
        'question_id',
    ];

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
