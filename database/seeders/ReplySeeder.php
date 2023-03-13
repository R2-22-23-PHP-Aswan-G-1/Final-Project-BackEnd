<?php

namespace Database\Seeders;

use App\Models\Reply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $replies = ['reply  1', 'reply 2', 'reply 3'];
        // $id= [1 , 2 , 3];
        for ($i=0; $i < count($replies); $i++) {
                 Reply::create([
                'reply_body' => $replies[$i],
                'user_id' =>1 ,
                'qcomment_id'=>1
                 ]);
    }
    }}
