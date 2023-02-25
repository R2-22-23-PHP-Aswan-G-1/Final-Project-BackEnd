<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Resources\SuperTrackResource;
use App\Http\Resources\TrackResource;
use App\Models\Supertrack;
use App\Models\supertrack_subtracks;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class supertrackController extends Controller
{
    public function index()
    {
        return TrackResource::collection(Supertrack::all());
    }

    public function store(StoreTrackRequest $request)
    {
        $subTracksIds = $request->subTrackIds;
        $track =Supertrack::create([
            'name' => $request->name
        ]);
        $track->subTrack()->attach($subTracksIds);
        return response(['message' => 'success']);
    }
    public function show(Supertrack $supertrack)
    {
        return new SuperTrackResource($supertrack);
    }


    // public function update(Request $request, Track $track)
    // {
    //     //
    // }

    // public function destroy(Track $track)
    // {
    //     //
    // }
}
