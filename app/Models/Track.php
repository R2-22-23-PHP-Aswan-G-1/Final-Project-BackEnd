<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function subTrack(){
        return $this->belongsToMany(Sub_track::class,'sub_track_super_tracks','super_track_id');
    }
}
