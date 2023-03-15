<?php

namespace App\Http\Controllers;

use App\Models\Subtrack;
use App\Models\Supertrack;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class supertrackController extends Controller
{
    public function show(Supertrack $track)
    {
        return View('dashboard/tracks.index')->with(['track' => $track, 'subtracks' => $track->subtrack]);
    }
    public function edit(Supertrack $track)
    {
        return View('dashboard/tracks.edit')->with(['supertrack' => $track, 'subtracks' => Subtrack::all()]);
    }
    public function update(Request $request , Supertrack $track)
    {
        $subTracksIds = $request->subtracks;
        $track->subTrack()->attach($subTracksIds);
        return View('dashboard/tracks.index')->with(['track' => $track, 'subtracks' => $track->subtrack]);
    }
}
