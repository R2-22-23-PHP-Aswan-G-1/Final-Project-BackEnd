<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\traits\InstructorTrait;

class PostController extends Controller
{
    use InstructorTrait;

    public function index()
    {
        $posts = Post::all()->sortDesc();
        return (['message' => 'success', 'data' => PostResource::collection($posts)]);
    }
    public function getpostsbyinstrctorid($instructor_id)
    {
        $posts = Post::select('*')->where('instructor_id',$instructor_id)->latest()->get();
        return (['message' => 'success', 'data' => PostResource::collection($posts)]);
    }

    public function searchpost($search){
        $posts = Post::select('*')->where('body',"like",'%'.$search.'%')->latest()->get();
        return (['message' => 'success', 'data' => PostResource::collection($posts)]);
    }


    public function store(StorePostRequest $request)
    {
        Post::create([
            'body' => $request->body,
            'instructor_id' =>$request->instructor_id,
        ]);
        $this->increasePoints(Auth::user()->instructor);
        return (['message' => 'success']);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required'
        ]);
        $post = $post->update([
            'body' => $request->body,
        ]);

        if ($post) {
            return (['message' => "success"]);
        }
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return (['message' => "success"]);
    }
    public function addComment(Request $request)
    {
        $request->validate([
            'body' => 'required',
            'post_id' => ['required', 'exists:App\Models\Post,id'],
        ]);
        $flag = Comment::create([
            'body' => $request->body,
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
        ]);
        if ($flag) {
            return (['message' => 'success']);
        }
    }
    public function updateComment(Request $request, Comment $comment)
    {
        $request->validate([
            'body' => 'required',
        ]);
        $comment->body = $request->body;
        if ($comment->save()) {
            return (['message' => 'success']);
        }
    }
    public function deleteComment(Comment $comment)
    {
        if ($comment->delete()) {
            return (['message' => 'success']);
        }
    }
}
