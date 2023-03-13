<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'subtrack_id',
    ];
    public function answers(){
      return $this->hasMany(Answer::class,) ; 
    }
    public function subTrack(){
      return $this->belongsTo(Subtrack::class,'subtrack_id') ; 
    }
}
