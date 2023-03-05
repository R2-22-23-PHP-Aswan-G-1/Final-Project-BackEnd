<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    }

    public function store(StorePostRequest $request)
    {
        Post::create([
            'body'=>$request->body,
            'instructor_id'=>Auth::id(),
        ]);
        return (['message'=>'success']);
    }

    public function show(Post $post)
    {
        $post = Post::find($post);
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        Post::destroy($post);
    }
    
}
