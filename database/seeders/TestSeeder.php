<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $body = ['What Is The Latest Version Of PHP' , 'Is PHP Support OOP' , 'Can PHP interact with JavaScript'];
        for ($i=0; $i < count($body); $i++) { 
            Test::create([
                'body'=> $body[$i],
                'subtrack_id'=>1
            ]);
        }

    }
}
