<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Resources\SubtrackResource;
use App\Models\Sub_track;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\ResponseTrait;

class subtrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SubtrackResource::collection(Sub_track::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrackRequest $request)
    {
        Sub_track::create([
            'name'=>$request->name,
        ]);
        return response(['message'=>'success']);
    }

    
    public function show(Sub_track $sub_track)
    {
        //
    }

    public function update(Request $request, Sub_track $sub_track)
    {
        //
    }

    public function destroy(Sub_track $sub_track)
    {
        //
    }
}
