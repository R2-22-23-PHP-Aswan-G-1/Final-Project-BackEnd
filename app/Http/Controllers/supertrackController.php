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
        return View('dashboard/tracks.edit')->with(['track' => $track, 'subtracks' => Subtrack::all()->paginate(5)]);
    }
    public function update(Request $request, Supertrack $track)
    {
        $oldsubtrackIds = [];
        if ($track->subTrack != null) {
            foreach ($track->subTrack as $subtrack) {
                $oldsubtrackIds[] = $subtrack->id;
                if (!in_array($subtrack->id, $request->subtracks)) {
                    $track->subTrack()->detach($subtrack->id);
                }
            }
        }
        foreach ($request->subtracks as $subtrackId) {
            if (!in_array($subtrackId, $oldsubtrackIds)) {
                $track->subTrack()->attach($subtrackId);
            }
        }

        return View('dashboard/tracks.index')->with(['track' => $track, 'subtracks' => $track->subtrack]);
    }
}
