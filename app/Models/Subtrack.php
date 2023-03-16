<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtrack extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    
    public function superTrack(){
        return $this->belongsToMany(Supertrack::class,'supertrack_subtracks');
    }
    public function question(){
        return $this->hasMany(Question::class);
    }
    public function order(){
        return $this->hasMany(Order::class);
    }
    public function tests(){
        return $this->hasMany(Test::class,) ;   
    }
}