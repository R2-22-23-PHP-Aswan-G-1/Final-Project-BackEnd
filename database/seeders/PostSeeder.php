<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $body = [
            'hello world' ,
            'Computer coding and programming jobs to consider' ,
            'What kinds of programming jobs are out there? What job duties are involved? And what can you expect from a computer coding salary? We’ve got answers to these questions and more.',
            'Most common programming languages for computer systems engineers: Python - Java - C++',
            'Data science is the fastest-growing computer programming career.',
            'Coding bootcamps offer training for programming jobs, plus career services.',
            "Computer programming jobs may require a bachelor's degree or higher.",
            'Many programmer jobs offer higher-than-average job security and coding salaries.'
        ];
        for ($i=0; $i < count($body); $i++) { 
            Post::create([
                'body'=>$body[$i],
                'instructor_id'=>rand(1,4),
            ]);
        }
    }
}
