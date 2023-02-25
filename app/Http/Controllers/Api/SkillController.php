<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Models\Skill;

class SkillController extends Controller
{
    
    public function index()
    {
         $skills= Skill ::all();
        return SkillResource::collection($skills);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
             rules:   [
                    'name'=>['required']
             ],
           
            );

        $data=$request->all();
       
        $name=$data['name'];
        Skill::create([
            'name'=>$name
        ]); 
        return ['message'=>"success"];       

    }

    /**
     * Display the specified resource.
     */
    public function show( $skill)
    {
        $skill= Skill ::find($skill);
        return new SkillResource($skill);


        
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$id)
    {
       Skill::find($id)->update([
            'name' => $request->name
        ]);
        return ['message'=>"updated"];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $skill)
    {
        Skill::destroy($skill);
        return ['message'=>"deleted"];
    
    
    }
















}
