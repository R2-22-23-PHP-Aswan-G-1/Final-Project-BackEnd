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

    public function order(){
        
        return $this->hasMany(Order::class);
    }
}
