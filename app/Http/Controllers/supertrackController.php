<?php

namespace App\Http\Controllers;

use App\Models\Supertrack;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class supertrackController extends Controller
{
    public function show (Supertrack $track){
        return View('dashboard/tracks.index')->with(['track' => $track , 'subtracks'=>$track->subtrack]);
    }

}
