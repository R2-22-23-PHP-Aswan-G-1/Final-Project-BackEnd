<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestResource;
use App\Models\Answer;
use App\Models\Subtrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class TestController extends Controller
{
    public function show(Subtrack $subtrack)
    {
        return (['message'=>'success' , 'test' => TestResource::collection($subtrack->tests)]) ;
    }
    public function index(Request $request) {

        $answers = $request->answer;
        $instructor = Auth::user()->instructor;   
        $answer = Answer::where('id' , $answers[1])->first();
        $subtrack = $answer->test->subTrack;
        $counter = 0;
        for ($i=0; $i < count($answers) ; $i++) { 
            if (Answer::where('id' , $answers[$i])->select('correct')->get()){
                $counter++;
            }
        };
        $avg = $counter / (count($answers)-1);
        if($avg > .85){
            $instructor->subtracks()->attach($subtrack);
        }
        return (['message' =>'success' , 'mark'=>$counter , 'percentage' => $avg*100]);
    }
}
