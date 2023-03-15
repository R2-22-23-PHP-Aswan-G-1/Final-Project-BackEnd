<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_at',
        'user_id',
        'qcomment_id'

    ];

    public function comment(){
        $this->belongsTo(Qcomment::class);
    }
    public function user(){
        $this->belongsTo(User::class);
    }
}
