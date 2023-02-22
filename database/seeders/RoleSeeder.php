<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['user', 'instructor', 'admin'];
        for ($i=0; $i < count($roles); $i++) {
            $user = Role::create([
                'name' => $roles[$i],
            ]);
        }
    }
}
