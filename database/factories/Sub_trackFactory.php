<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Sub_trackFactory extends Factory
{
    public function definition(): array
    {
        return [
                'name' => fake()->name(),
                'track_id'=>1
        ];
    }
}
