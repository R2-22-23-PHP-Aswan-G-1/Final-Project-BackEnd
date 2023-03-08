<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supertrack extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description'
    ];

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class,'track_id');
    }
    public function subTrack()
    {
        return $this->belongsToMany(Subtrack::class, 'supertrack_subtracks');
    }
    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
