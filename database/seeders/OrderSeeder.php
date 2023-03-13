<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'instructor_id' => 2,
            'user_id' => 3 ,
            'price' => 30.5,
            'attachement' => 'file.txt',
            'appointment' => '2023-02-27 13:19:35',
            'vedio_link'  =>'teams.com',
            'evaluation' => 5, 
            'service_id' => 1,
            'track_id'=> 1 ,
            // 'subtrack_id'=> 1
        ]);
    }
}
