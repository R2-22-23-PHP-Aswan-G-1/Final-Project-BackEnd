<?php

namespace Database\Seeders;

use App\Models\Subtrack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubtrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['PHP', 'NODE JS', 'LARAVEL', 'MY SQL', 'OOP', 'REST-API',
        'Symfony' ,'Apache' , 'Xampp','.net' , 'HTML' ,'CSS' , 'JavaScript'];
       for ($i=0; $i < count($names); $i++) {
        Subtrack::create([
               'name' => $names[$i],
           ]);
       }
    }
}
