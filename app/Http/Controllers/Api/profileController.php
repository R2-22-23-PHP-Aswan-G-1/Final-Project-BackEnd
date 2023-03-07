<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\languageResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\TrackResource;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{  
    public function getInstructorPosts(User $user){
      return (['message'=>'success', 'posts' => PostResource::collection($user->instructor->posts) ]);
    }
    public function getInstructorLanguages(User $user){
      return (['message'=>'success', 'languages' => languageResource::collection($user->instructor->languages)]);
    }
    public function getInstructorCertificates(User $user){
        return (['message'=>'success', 'certificates'=>$user->instructor->certificates]);
    }
    public function getInstructorEducation(User $user){
        return (['message'=>'success', 'education' => $user->instructor->education]);
    }
    public function getInstructorTestemonials(User $user){
        return (['message'=>'success', 'testimonials' => $user->instructor->testimonials]) ;
    }
    public function getInstructorTrack(User $user){
        return (['message'=>'success', 'track' => new TrackResource( $user->instructor->superTrack)]);
    }
    public function getInstructorSkiils(User $user){
        return (['message'=>'success', 'skills' => $user->instructor->skills]);
    }
    public function getInstructorMajor(User $user){
        return (['message'=>'success', 'major' => $user->instructor->major]);
    }
    public function getInstructorProfile(User $user){
        return (['message'=>'success', 'data' => $user->instructor]);
    }
    public function getInstructorWorkHistory(User $user){
        return (['message'=>'success', 'data' => $user->instructor->workHistory]);
    }
}

