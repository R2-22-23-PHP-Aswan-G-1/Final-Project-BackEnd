<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostReplayRequest;
use App\Http\Requests\UpdatePostReplayRequest;
use App\Models\Post;
use App\Models\PostReplay;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PostReplayController extends Controller
{
    public function index()
    {
    }

    public function store(StorePostReplayRequest $request)
    {
        //
    }
    public function show(PostReplay $postReplay)
    {
        //
    }

    public function update(UpdatePostReplayRequest $request, PostReplay $postReplay)
    {
        //
    }

    public function destroy(PostReplay $postReplay)
    {
        //
    }
}
