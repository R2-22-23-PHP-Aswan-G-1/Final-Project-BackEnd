<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        return $this->belongsTo(User::class);
    }
}
