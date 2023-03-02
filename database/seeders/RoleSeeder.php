<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['user', 'instructor', 'admin'];
        for ($i=0; $i < count($roles); $i++) {
            $role = Role::create([
                'name' => $roles[$i],
            ]);
        }
    }
}
