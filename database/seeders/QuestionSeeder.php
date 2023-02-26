<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bodes = ['Question 1', 'Question 2', 'Question 3'];
        for ($i=0; $i < count($names); $i++) {
                 User::create([
                'body' => $bodes[$i],
                'user_id' => 1 ,

            ]);
        }
    }
}
