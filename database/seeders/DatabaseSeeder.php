<<<<<<< HEAD
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(50)->create();

        \App\Models\Testimonial::factory(100)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
=======
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(50)->create();

        // \App\Models\Post::factory(100)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TrackSeeder::class,
            InstructorSeeder::class,
            // LikeSeeder::class,
            QuestionSeeder::class,
            ServiceSeeder::class,
            OrderSeeder::class,
            
           
            
            
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
>>>>>>> 0f376e4a62995842a6558ce702a968bb10b7e6b7
