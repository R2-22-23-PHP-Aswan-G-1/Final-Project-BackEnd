<?php

namespace App\Http\Controllers\api;
use App\Models\Question;
use App\Models\User;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Route;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::all();
        foreach($questions as $question){
            $question['user'] = $question['user']->user ;
        }
        return $questions;
    }

    public function show($user_id){

        $user_question = Question::select('*')->where('user_id',$user_id)->get();
        foreach($user_question as $question){
            $question['user'] = $question['user']->user ;
        }
        return $user_question;
    }

    public function store(Request $request){
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
       return $this->index();
    }

    public function destroy($Id){
        
        Question::find($Id)->delete();
        return $this->index();
    }


}
