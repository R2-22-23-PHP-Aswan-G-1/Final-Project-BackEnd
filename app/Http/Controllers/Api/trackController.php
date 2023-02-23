<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Resources\TrackResource;
use App\Models\Sub_track;
use App\Models\SubTrack_superTrack;
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
        return TrackResource::collection(Track::all());
    }

    public function store(StoreTrackRequest $request)
    {
        $subTracksIds = $request->subTrackIds;
        $track =Track::create([
            'name' => $request->name
        ]);
        for ($i = 0; $i < count($subTracksIds); $i++) {
            SubTrack_superTrack::create([
                'super_track_id'=>$track->id,
                'sub_track_id'=>$subTracksIds[$i]
            ]);
        }
        return response(['message' => 'success']);
    }
    public function show(Track $track)
    {
        //
    }


    public function update(Request $request, Track $track)
    {
        //
    }

    public function destroy(Track $track)
    {
        //
    }
}
