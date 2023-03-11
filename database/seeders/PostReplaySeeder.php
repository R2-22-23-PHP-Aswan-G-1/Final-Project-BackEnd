<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostReplay;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostReplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $body = [
            'hello world' ,
            'I agree With You' ,
            'No I don;t agree with you',
            'You are wrong'
        ];
        
        for ($i=0; $i < count($body); $i++) { 
            Comment::create([
                'body'=>$body[$i],
                'user_id'=>rand(1,4),
                'post_id'=>rand(1,8),
            ]);
        }
    }
}
