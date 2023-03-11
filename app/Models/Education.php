<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty','department','instructor_id'
    ];

    public function instructor(){
        return $this->belongsTo(Instructor::class,);
    }
    
}
