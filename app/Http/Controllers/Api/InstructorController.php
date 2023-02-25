<?php

namespace App\Http\Controllers\Api;

use App\Models\Instructor;
use App\Http\Controllers\Controller;
use App\Http\Resources\instructorResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    









    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function storeSkills(Request $request)
    {
          
        $request->validate([
            'skill_id'=>['required','exists:App\Models\Skill,id'],
            'instructor_id'=>['required','exists:App\Models\Instructor,id'],
        ]);
      $skill_id=$request->skill_id;
      $instructor_id=$request->instructor_id;

      $instructor= Instructor::find($instructor_id);
      $instructor->skills()->attach($skill_id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
       return    new instructorResource($instructor) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
