<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable =[
        'instructor_id',
        'order_id',
        'price',
    ];
    public function instructor(){
        return $this->belongsTo(Instructor::class,);
    }
    public function order(){
        return $this->belongsTo(Order::class,);
    }
}
