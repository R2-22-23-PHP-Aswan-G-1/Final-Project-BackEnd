<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Arabic', 'English', 'French' , 'Spanish' , 'Bengali' , 'Russian' ,'Hindi'];
        for ($i=0; $i < count($roles); $i++) {
            $role = Language::create([
                'name' => $roles[$i],
            ]);
        }
    }
}
