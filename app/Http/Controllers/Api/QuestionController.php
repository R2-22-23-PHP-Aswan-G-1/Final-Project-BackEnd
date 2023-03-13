<?php

namespace App\Http\Controllers\api;
use App\Models\Question;
use App\Models\User;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Resources\QuestionResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Route;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::all()->sortDesc();
        return QuestionResource::collection($questions);
    }

    public function show($question_id){
        $question =  Question::find($question_id);
        return new QuestionResource($question);
    }
  
    public function store(Request $request){
        $question = $request->all();
        $question_body = $question['question_body'];
        $user_id = $question['user_id'];
        $subtrack_id = $question['subtrack_id'];
       
         Question::create([
            'question_body'=>$question_body,
            'user_id'=>$user_id,
            'subtrack_id'=>$subtrack_id,

        ]);
        return $this->indexfristquestion();

    }

    public function update(Request $request, $id )
    {

        $question= Question::where('id',$id)->update([
            'question_body' => $request['question_body'],
            'subtrack_id' => $request['subtrack_id'],
            // 'subtrack_id' => $request['subtrack_id'],
        ]);

        // return  ['message','updated'];
        return new QuestionResource(Question::find($id));
    }

    public function destroy($Id){
        
        Question::find($Id)->delete();
        return $this->index();
    }

    public function showFilter($subtrackid){

        $questions = Question::select('*')->where("subtrack_id",$subtrackid)->get()->sortDesc();
        return QuestionResource::collection($questions);
    }
    public function showfristFilter($subtrackid){

        $questions = Question::select('*')->where("subtrack_id",$subtrackid)->skip(0)->take(1)->get();
        return QuestionResource::collection($qcomments);
    }

    public function showtenfristFilter($subtrackid){

        $questions = Question::select('*')->where("subtrack_id",$subtrackid)->skip(0)->take(10)->get();
        return QuestionResource::collection($qcomments);
    }
    public function indexfristquestion(){
        $questions = Question::all()->sortDesc()->skip(0)->take(1);
        return QuestionResource::collection($questions);
    }

    public function indextenfristquestion(){
        $questions = Question::all()->sortDesc()->skip(0)->take(10);
        return QuestionResource::collection($questions);
    }
   
}
