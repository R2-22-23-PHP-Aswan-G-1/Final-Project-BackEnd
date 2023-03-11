<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\subtrack;

class SubtrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['PHP', 'NODE JS', 'LARAVEL', 'MY SQL', 'OOP', 'REST-API',
        'Symfony' ,'Apache' , 'Xampp'];
       for ($i=0; $i < count($names); $i++) {
        Subtrack::create([
               'name' => $names[$i],
           ]);
       }
    }
}
