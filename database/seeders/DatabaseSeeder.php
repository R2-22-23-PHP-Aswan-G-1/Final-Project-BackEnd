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
            // TrackSeeder::class,
            // RoleSeeder::class,
            // UserSeeder::class,
            // InstructorSeeder::class,
            SubtrackSeeder::class,
            PostSeeder::class,
            PostReplaySeeder::class,
            LanguageSeeder::class,
            TestimonialSeeder::class,
            TestSeeder::class,
            // LikeSeeder::class,
            // QuestionSeeder::class,
            // QcommentSeeder::class ,
            // ReplySeeder::class,
            ServiceSeeder::class,
            // OrderSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

?>
