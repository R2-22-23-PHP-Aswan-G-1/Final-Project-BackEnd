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
        $names = ['Make InterView', 'Explain To Me', 'Review My Code'];
        for ($i=0; $i < count($names); $i++) {
                 Service::create([
                'name' => $names[$i],
            ]);
        }
    }
}
