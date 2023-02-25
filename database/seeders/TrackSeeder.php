<?php

namespace Database\Seeders;

use App\Models\Supertrack;
use App\Models\Track;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    public function run(): void
    {
        $names = ['Back-End', 'Front-End', 'FullStack', 'Mobile Application', 'Cyber Security', 'System Admindstration',
         'Network Administrator' ,'Data Science' , 'Artificial Intelligence','Network Administrator'];
        for ($i=0; $i < count($names); $i++) {
            $user = Supertrack::create([
                'name' => $names[$i],
            ]);
        }
    }
}
