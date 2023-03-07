<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills= Skill ::all();
        return $skills;
       
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
            params:[
                'name.required'=>['skill is required']
            ]
            );

        $data=$request->all();
        Skill::create($data);        

    }
    public function show( $skill)
    {
        $skill= Skill ::find($skill);     
    }
  
    public function update(Request $request)
    {
       Skill::find($request->id)->update([
            'name' => $request->name
        ]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $skill)
    {
        Skill::destroy($skill);
    
    }



}
