<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'image',
        'role_id',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function instructor()
    {
        return $this->hasOne(Instructor::class);
    }



    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }
    public function reply()
    {
        return $this->hasMany(Reply::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }

}
