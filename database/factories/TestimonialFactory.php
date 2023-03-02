<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Testimonial;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return[
                              
         'body'=> $this->faker->paragraph,
         'rate'=> rand(1, 5),
         'instructor_id'=>  Instructor::all()->random()->id ,
         'user_id'=> User::all()->random()->id

        ];



      
    }
}
