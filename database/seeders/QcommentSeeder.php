<?php

namespace Database\Seeders;

use App\Models\Qcomment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class QcommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $qComments = ['Q-comment 1', 'Q-comment 2', 'Q-comment 3'];
        $id= [1 , 2 , 3];
        for ($i=0; $i < count($qComments); $i++) {
                 Qcomment::create([
                'qcomment_body' => $qComments[$i],
                'instructor_id' => $id[$i] ,
                'question_id' => 2

            ]);
        }
    }
}
