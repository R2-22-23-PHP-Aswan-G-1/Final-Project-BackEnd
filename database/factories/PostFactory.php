<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'instructor_id'=>rand(1,4),
            'body' => Str::random(20),
        ];
    }
}
