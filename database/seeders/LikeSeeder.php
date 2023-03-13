<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\like;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0 ; $i<10 ; $i++ ){

            Like::create([
                'comment_id' => 1,
                'user_id' => 1 ,
            ]);
        }

    }
}
