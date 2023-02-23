<?php

namespace Database\Seeders;

use App\Models\Sub_track;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubTrackSeeder extends Seeder
{
    public function run(): void
    {
        $names = ['PHP', 'NODE JS', 'LARAVEL', 'MY SQL', 'OOP', 'REST-API',
        'Symfony' ,'Apache' , 'Xampp'];
       for ($i=0; $i < count($names); $i++) {
           $sub_track = Sub_track::create([
               'name' => $names[$i],
           ]);
       }
    }
}
