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
}