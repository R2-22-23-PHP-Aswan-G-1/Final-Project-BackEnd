<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bodes = ['Question 1', 'Question 2', 'Question 3'];
        for ($i=0; $i < count($bodes); $i++) {
                 Question::create([
                'body' => $bodes[$i],
                'user_id' => 1 ,
            ]);
        }
    }
}
