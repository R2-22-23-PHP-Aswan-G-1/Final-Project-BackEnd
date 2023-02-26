<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['interview', 'Help me ', 'other'];
        for ($i=0; $i < count($names); $i++) {
                 User::create([
                'name' => $names[$i],

            ]);
        }
    }
}
