<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor_service_student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
   
    ];

    public function user(){

        return $this->hasMany(User::class);
    }

    public function instructor(){

        return $this->hasMany(Instructor::class);
    }

    public function track(){

        return $this->hasMany(Track::class);
    }

    public function service(){

        return $this->hasMany(Service::class);
    }
}
