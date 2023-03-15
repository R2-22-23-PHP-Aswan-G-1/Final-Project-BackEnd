<?php

namespace App\Http\Traits;

use App\Models\Instructor;

trait InstructorTrait
{
    public function increasePoints(Instructor $instructor)
    {
        $newPoints = $instructor->points + 1;
        $instructor->points += 500;
        if ($instructor->points > 1500) {
            $instructor->rate = "Top Rated";
        } elseif ($instructor->points > 1000) {
            $instructor->rate = "Senior";
        } elseif ($instructor->points > 500) {
            $instructor->rate = "Mid Senior";
        }
        $instructor->save();
    }
}
