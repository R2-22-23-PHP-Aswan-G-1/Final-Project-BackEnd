<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTrack_superTrack extends Model
{
    use HasFactory;
    protected $fillable = [
        'super_track_id',
        'sub_track_id'
    ];
}
