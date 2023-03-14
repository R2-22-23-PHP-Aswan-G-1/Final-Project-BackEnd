<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\instructorResource;
use App\Http\Resources\languageResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\SubtrackResource;
use App\Http\Resources\SuperTrackResource;
use App\Http\Resources\TrackResource;
use App\Http\Resources\TestimonialResource;
use App\Models\Education;
use App\Models\Instructor;
use App\Models\Language;
use App\Models\Subtrack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{

    public function getInstructorProfile(User $user)
    {
        return (['message' => 'success', 'instructor' => new  instructorResource($user->instructor)]);
    }
    public function getInstructorPosts(User $user)
    {
        return (['message' => 'success', 'posts' => PostResource::collection($user->instructor->posts)]);
    }
    public function getInstructorLanguages(User $user)
    {
        return (['message' => 'success', 'languages' => languageResource::collection($user->instructor->languages)]);
    }
    public function getInstructorCertificates(User $user)
    {
        return (['message' => 'success', 'certificates' => $user->instructor->certificates]);
    }
    public function getInstructorEducation(User $user)
    {
        return (['message' => 'success', 'education' => $user->instructor->education]);
    }
    public function getInstructorTestemonials(User $user)
    {
        return (['message' => 'success', 'testimonials' => TestimonialResource::collection($user->instructor->testimonials)]);
    }
    public function getInstructorTrack(User $user)
    {
        return (['message' => 'success', 'track' => new SuperTrackResource($user->instructor->superTrack)]);
    }
    public function getInstructorSkiils(User $user)
    {
        return (['message' => 'success', 'skills' => $user->instructor->skills]);
    }
    public function getInstructorMajor(User $user)
    {
        return (['message' => 'success', 'major' => $user->instructor->major]);
    }
    public function getInstructorWorkHistory(User $user)
    {
        return (['message' => 'success', 'data' => $user->instructor->workHistory]);
    }
    public function getInstructorSubTrack(User $user)
    {
        return (['message' => 'success', 'data' => SubtrackResource::collection($user->instructor->subtracks)]);
    }
    public function getInstructorVerifiedSubTrack(User $user)
    {
        $all_sub_tracks = $user->instructor->superTrack->subTrack;
        $all_sub_tracks_ids = [];
        $returned_sub_tracks = [];
        $all_verified_sub_tracks_ids = [];
        $verified_sub_tracks = $user->instructor->subtracks;
        for ($i = 0; $i < count($verified_sub_tracks); $i++) {
            $all_verified_sub_tracks_ids[] =  $verified_sub_tracks[$i]['id'];
        }
        for ($i = 0; $i < count($all_sub_tracks); $i++) {
            $all_sub_tracks_ids[] =  $all_sub_tracks[$i]['id'];
        }
        for ($i = 0; $i < count($all_sub_tracks); $i++) {
            if (!in_array($all_sub_tracks[$i]['id'], $all_verified_sub_tracks_ids)) {
                $returned_sub_tracks[] = $all_sub_tracks[$i];
            }
        }
        return (['message' => 'success', 'data' => SubtrackResource::collection($returned_sub_tracks)]);
    }
    public function instructor_delete_language(Language $language)
    {
        $instructor = Auth::user()->instructor;
        $instructor->languages()->detach($language->id);
        return (['message' => 'success']);
    }
    public function  update_instructor_education(Request $request, Education $education)
    {
        $education->update($request->all());
        return (['message' => 'success']);
    }
}
