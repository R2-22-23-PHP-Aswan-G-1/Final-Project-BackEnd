<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
       
        $emails = ['m@e.com', 'z@e.com', 'm@f.com', 't@a.com'];
        $roles = [2 , 2 , 2 , 2];
        $names = ['Mohamed Emad', 'Zinab Ebaid', 'Mostafa Fahmy', 'Tasneem Ahmed'];
        for ($i=0; $i < count($emails); $i++) {
            $user = User::create([
                'name' => $names[$i],
                'email' => $emails[$i],
                'role_id' => $roles[$i],
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
