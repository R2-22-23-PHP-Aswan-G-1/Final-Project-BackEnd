<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supertrack extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    
    public function subTrack(){
        return $this->belongsToMany(Subtrack::class,'supertrack_subtracks');
    }
}
