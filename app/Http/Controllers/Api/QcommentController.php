<?php

namespace App\Http\Controllers\Api;
use App\Http\traits\InstructorTrait;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\QcommentResource;
use App\Models\Qcomment;
use Illuminate\Support\Facades\Auth;

class QcommentController extends Controller
{
    public function index()
    {
        $qcomments = Qcomment::all();
        return  QcommentResource::collection($qcomments);
    }


    public function store(Request $request)
    {
        
        $qcomment = $request->all();
        $qcomment_body = $qcomment['qcomment_body'];
        $instructor_id = $qcomment['instructor_id'];
        $question_id = $qcomment['question_id'];
       
        Qcomment::create([
            'qcomment_body'=>$qcomment_body,
            'instructor_id'=>$instructor_id,
            'question_id'=>$question_id,

        ]);
        $this->increasePoints(Auth::user()->instructor);
        return $this->index();

    }

    public function show( $qcomment_id)
    {
        $qcomments = Qcomment::find($qcomment_id);
        return new QcommentResource($qcomments);
    }


    
    public function update(Request $request,$qcomment_id)
    {
        $qcommentup =Qcomment::findOrFail($qcomment_id);
        $qcomment = $request->all();
        $qcomment_body = $qcomment['qcomment_body'];
       
        $qcommentup->update([
            'qcomment_body'=>$qcomment_body,

        ]);
        return new QcommentResource(Qcomment::find($qcomment_id));
    }


    
    public function destroy( $qcomment_id)
    {
        Qcomment::find($qcomment_id)->delete();
        return $this->index();
    }

    public function showFristcomment( $question_id)
    {
        $qcomments = Qcomment::select('*')->where('question_id',$question_id)->limit(1)->get();
        return QcommentResource::collection($qcomments);
    }
}
