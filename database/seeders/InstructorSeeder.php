<?php

namespace Database\Seeders;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_ids = User::where('role_id' , 2)->get();
        for ($i=0; $i < count($user_ids); $i++) {
            $instructor = Instructor::create([
                'rate' => 'Junior',
                'supertrack_id' => 1,
                'user_id' => $user_ids[$i]['id'],
            ]);
        }
    }
}
