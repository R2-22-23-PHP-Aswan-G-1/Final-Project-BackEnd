<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use   App\Database\Factories;
class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
    
      Testimonial::factory()->count(20)->create();
 
    }
}

