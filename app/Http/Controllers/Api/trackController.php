<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Resources\TrackResource;
use App\Models\Supertrack;
use App\Models\supertrack_subtracks;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class trackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $track->subTrack()->attach([1,2]);
        return response(['message' => 'success']);
    }
    // public function show(Track $track)
    // {
    //     //
    // }


    // public function update(Request $request, Track $track)
    // {
    //     //
    // }

    // public function destroy(Track $track)
    // {
    //     //
    // }
}
