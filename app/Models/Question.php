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
        'question_body',
        'user_id',
        'subtrack_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subtrack()
    {
        return $this->belongsTo(Subtrack::class);
    }


    public function qcomment(){
        return $this->hasMany(Qcomment::class);
    }

}
