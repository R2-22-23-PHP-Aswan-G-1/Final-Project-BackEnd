<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Qcomment;
use App\Models\Instructor;

class LikeController extends Controller
{
    public function index(){
        $like = Like::all();

        return $like ;
    }

    public function store(Request $request){
        $like = $request->all();
        $student_id = $like['user_id'] ; 
        $comment_id = $like['comment_id'];
        $this->addRate($request);
        Like::create([

            'user_id' => $student_id ,
            'qcomment_id' =>  $comment_id
        ]);
        return 'done';
    }

    public function destroy($id){
        $this->remRate();
        Like::find($id)->delete();
        return redirect('/services');
    }

    public function update(Request $request ,$id){
        $likeup = Like::findOrFail($id) ;
        $like = $request->all();
        $student_id = $like['Student_id'];
        $commint_id = $like['commint_id'];
        $likeup->update([
            'user_id'=>$student_id,
            'commint_id' => $commint_id
        ]);
        return redirect('/likes');
    }

    private function addRate(Request $request){
        $like = $request->all();
        $student_id = $like['user_id'] ; 
        $comment_id = $like['comment_id'];
        $comment= Qcomment::find($comment_id);
        $rate = Instructor::findOrFail($comment->instructor_id);
        $tottalrate = $rate->rate;
        $rate->update([
            "rate" =>(int)$tottalrate +1 ,
        ]);
    }

    private function remRate(Request $request){
        $comment= Qcomment::find($comment_id);
        $rate = Instructor::findOrFail($comment->instructor_id);
        $tottalrate = $rate->rate;
        $rate->update([
            "rate" =>(int)$tottalrate -1 ,
        ]);
    }
}
