<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'created_at',
        'user_id',

    ];

    public function user(){
        $this->belongsTo(Users::class);
    }
}
