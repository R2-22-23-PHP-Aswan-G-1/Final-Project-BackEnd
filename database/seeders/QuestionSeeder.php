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
        $questions = ['Question 1', 'Question 2', 'Question 3'];
        // $id= [1 , 2 ];
        for ($i=0; $i < count($questions); $i++) {
                 Question::create([
                'question_body' => $questions[$i],
                'user_id' => 1 ,
                'subtrack_id' => 1

            ]);
        }
    }
}
