<<<<<<< HEAD
<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use   App\Database\Factories;
class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Testimonial::factory()->count(20)->create();
    }
}
=======
<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use   App\Database\Factories;
class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
      Testimonial::factory()->count(20)->create();
 
    }
}
>>>>>>> 0f376e4a62995842a6558ce702a968bb10b7e6b7
