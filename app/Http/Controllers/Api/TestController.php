<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestResource;
use App\Models\Answer;
use App\Models\Subtrack;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show(Subtrack $subtrack)
    {
        return (['message'=>'success' , 'test' => TestResource::collection($subtrack->tests)]) ;
    }
    public function index(Request $request) {
        $counter = 0;
        $answers = $request->answer;
        for ($i=0; $i < $answers; $i++) { 
            if (Answer::where('id' , $answers[$i])->select('correct')->get()){
                $counter++;
            }
            return (['message' =>'success' , 'mark'=>$counter , 'percentage' => $counter / count($answers)]);
        };
    }
}
