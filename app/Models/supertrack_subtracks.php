<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supertrack_subtracks extends Model
{
    use HasFactory;
    protected $fillable = [
        'supertrack_id',
        'subtrack_id'
    ];

    public function order() {
        return $this->hasMany(Order::class);
    }
}
