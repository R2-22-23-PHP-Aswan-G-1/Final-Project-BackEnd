<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestResource;
use App\Models\Answer;
use App\Models\Subtrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use App\Http\traits\InstructorTrait;

class TestController extends Controller
{
    use InstructorTrait;
    public function show(Subtrack $subtrack)
    {
        return (['message' => 'success', 'test' => TestResource::collection($subtrack->tests)]);
    }
    public function index(Request $request)
    {
        $answers = $request->answer;
        $instructor = Auth::user()->instructor;
        $answer = Answer::where('id', $answers[1])->first();
        $subtrack = $answer->test->subTrack;
        $counter = 0;
        for ($i = 0; $i < count($answers); $i++) {
            $correct = Answer::where('id', $answers[$i])->first();
            if ($correct['correct'] == 1) {
                $counter++;
            }
        };
        $avg = ($counter / (count($answers)) / 100) * 100;
        if ($avg > .85) {
            $this->increasePoints(Auth::user()->instructor);
            $instructor->subtracks()->attach($subtrack);
        }
        return (['message' => 'success', 'mark' => $counter, 'percentage' => $avg * 100]);
    }
}
