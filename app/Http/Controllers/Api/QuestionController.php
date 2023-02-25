<?php

namespace App\Http\Controllers\api;
use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $question = Question::all();
        return $question ;
    }

    public function store(StoreQuestionRequest $request){
        $question = $request->all();
        $body = $question['body'];
        $user_id = $question['user_id'];
        Question::create([
            'body'=>$body,
            'user_id'=>$user_id,
        ]);
        return "done";
    }

    public function update(Request $request , $question){
        $questionup=Question::findOrFail($question);
        $question = $request->all();
        $body = $question['body'];
        $user_id = $question['user_id'];
        $questionup->update([
            'body'=>$body, 
        ]);
        return redirect('/questions');
    }

    public function destroy($Id){
        
        Question::find($Id)->delete();
        return redirect('/questions');
    }


}
