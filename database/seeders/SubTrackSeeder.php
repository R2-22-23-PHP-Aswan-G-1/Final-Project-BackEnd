<?php

namespace Database\Seeders;

use App\Models\Subtrack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubTrackSeeder extends Seeder
{
    public function run(): void
    {
        $names = ['PHP', 'NODE JS', 'LARAVEL', 'MY SQL', 'OOP', 'REST-API',
        'Symfony' ,'Apache' , 'Xampp'];
       for ($i=0; $i < count($names); $i++) {
           $sub_track = Subtrack::create([
               'name' => $names[$i],
           ]);
       }
    }
}
