<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_track extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function superTrack(){
        return $this->belongsToMany(Track::class,'sub_track_super_tracks','sub_track_id');
    }
}