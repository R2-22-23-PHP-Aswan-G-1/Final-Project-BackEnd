<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function indix(){
        $like = Like::all();

        return $like ;
    }

    public function store(Request $request){
        $like = $request->all();
        $student_id = $like['student_id'] ; 
        $comment_id = $like['comment_id'];
        Like::create([

            'user_id' => $student_id ,
            'student_id' =>  $comment_id
        ]);
        return 'done';
    }

    public function destroy($id){
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
}
