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
            'instructor_id' => 1,
            'user_id' => 1 ,
            'price' => 30.5,
            'attachement' => 'file.txt',
            'appointment' => '30/03/2023 10:00:00',
            'vedio_link'  =>'teams.com',
            'evaluation' => 5, 
            'service_id' => 1,
            'track_id'=> 1 
        ]);
    }
}
