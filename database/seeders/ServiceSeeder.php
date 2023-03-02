<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['interview', 'Help me ', 'other'];
        for ($i=0; $i < count($names); $i++) {
                 Service::create([
                'name' => $names[$i],

            ]);
        }
    }
}
