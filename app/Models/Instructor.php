<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'rate',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }




    function skills(){
        return $this->belongsToMany(Skill::class,'instructor_skills');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

}
