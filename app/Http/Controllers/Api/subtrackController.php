<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrackRequest;
use App\Http\Resources\SubtrackResource;
use App\Models\Subtrack;
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
        return SubtrackResource::collection(Subtrack::all());
    }

    public function getSubtrackQuestions($subtrack_id){

    
    $subtrack = Subtrack::find($subtrack_id);
    return $subtrack->question;
}

    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required']
        ]);
        Subtrack::create([
            'name'=>$request->name,
        ]);
        return response(['message'=>'success']);
    }
    
    public function show(Subtrack $subtrack)
    {
        return new SubtrackResource($subtrack);
    }

}
