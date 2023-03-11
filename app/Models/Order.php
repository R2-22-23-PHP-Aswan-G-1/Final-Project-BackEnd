<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'created_at',
        'user_id',
        'attachement',
        'appointment',
        'vedio_link',
        'evaluation',
        'service_id',
        'instructor_id',
        'track_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function offers(){
        return $this->hasMany(Offer::class);
    }

    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }

    public function track(){
        return $this->belongsTo(Supertrack::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function subtrack(){
        return $this->belongsTo(Subtrack::class);
    }
}
