<?php

namespace Database\Seeders;

use App\Models\Supertrack;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Back-End/PHP', 'Front-End/Angular', 'Back-End/.net', 'Front-End/React', 'FullStack', 'Mobile Application/Flutter', 'Cyber Security', 'System Admindstration',
            'Network Administrator', 'Data Science', 'Artificial Intelligence', 'Network Administrator'
        ];
        $description = ["Back end developers are responsible for creating and maintaining technology at the back end of a website (the server, database and application). The attractive visuals created by designers, UX professionals and front end developers couldn't exist without the technology provided by a back end developer."];
        for ($i = 0; $i < count($names); $i++) {
            $user = Supertrack::create([
                'name' => $names[$i],
                'description' => $description[0]
            ]);
        }
    }
}
