<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ReplyResource;
use App\Models\Reply;
class ReplyController extends Controller
{
    //
    public function index(){
    $replies = Reply::all();
    return ReplyResource::collection($replies);
  }

  public function show($reply_id){
    $reply =  Reply::find($reply_id);
    return new ReplyResource($reply);
  }

  public function store(Request $request){
    $reply = $request->all();
    $reply_body = $reply['reply_body'];
    $user_id = $reply['user_id'];
    $qcomment_id = $reply['qcomment_id'];
  
   
    Reply::create([
        'reply_body'=>$reply_body,
        'user_id'=>$user_id,
        'qcomment_id'=>$qcomment_id
     

    ]);
    // return "done";
    return $this->index();

}

  public function update(Request $request, $reply_id)
  {

      $reply= Reply::findOrFail($reply_id);
      $reply->update([
          'reply_body' => $request['reply_body'],
      ]);
      return new ReplyResource(Reply::find($reply_id));
  }

  public function destroy($reply_id){
    $reply = Reply::find($reply_id)->delete();
    return $this->index();
  }
}

