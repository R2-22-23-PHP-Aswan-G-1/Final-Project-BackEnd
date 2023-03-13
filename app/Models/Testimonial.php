<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'rate',
        'user_id',
        'instructor_id'
    ];

    function instructors(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }

    function users(){
        return $this->belongsTo(User::class,'user_id');
    }


}
