<?php

namespace App\Http\Controllers\Api;

use App\Models\Instructor;
use App\Http\Controllers\Controller;
use App\Http\Resources\instructorResource;
use App\Models\Education;
use App\Models\Supertrack;
use App\Models\WorkHistory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function storeInstructorEducation(Request $request)
    {
        $request->validate([
            'faculty' => 'required',
            'department' => 'required',
        ]);
        $instructor_id = Auth::user()->instructor->id;
        Education::create([
            'faculty' => $request->faculty,
            'department' => $request->department,
            'instructor_id' => $instructor_id,
        ]);
        return (['message' => 'success']);
    }
    public function topTenInstructors()
    {
        $topTenInstructors[] = [];
        $allInstructors = Instructor::orderBy('rate', 'asc')->get();
        for ($i = 0; $i < 10; $i++) {
            $topTenInstructors[$i] = $allInstructors[$i];
        }
        return instructorResource::collection($topTenInstructors);
    }
    public function storeSkills(Request $request)
    {
        $request->validate([
            'skill_id' => ['required', 'exists:App\Models\Skill,id'],
        ]);
        $skill_id = $request->skill_id;
        $instructor_id = Auth::user()->instructor->id;
        $instructor = Instructor::find($instructor_id);
        $instructor->skills()->attach($skill_id);
    }
    public function storeLanguage(Request $request)
    {
        $request->validate([
            'language_id' => ['required', 'exists:App\Models\Language,id'],
        ]);
        $language_id = $request->language_id;
        $instructor_id = Auth::user()->instructor->id;
        $instructor = Instructor::find($instructor_id);
        $instructor->languages()->attach($language_id);
        return (['message' => 'success']);
    }
    public function show(Instructor $instructor)
    {
        return (['message' => 'success', 'data' => new instructorResource($instructor)]);
    }
    public function storeSuperTrack(Request $request)
    {
        $superTrack = Supertrack::where('id', $request->superTrack_id)->first();
        $request->validate([
            'superTrack_id' => ['required', 'exists:App\Models\Supertrack,id'],
        ]);
        $instructor_id = Auth::user()->instructor->id;
        $instructor = Instructor::find($instructor_id);
        $instructor->supertrack_id = $request->superTrack_id;
        $instructor->major = $superTrack->name;
        if ($instructor->save()) {
            return (['message' => 'success']);
        }
    }
    public function storeInstructorWorkHistory(Request $request)
    {
        $request->validate([
            'workHistory' => ['required']
        ]);
        $instructor = Auth::user()->instructor;
        $instructor->workHistory = $request->workHistory;
        if ($instructor->save()) {
            return (['message' => 'success']);
        }
    }
}
