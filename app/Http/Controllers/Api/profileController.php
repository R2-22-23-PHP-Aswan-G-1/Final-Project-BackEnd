<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\languageResource;
use App\Http\Resources\TrackResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{  
    public function getInstructorPosts(){
      return (['message'=>'success', 'posts' => Auth::user()->instructor->posts]);
    }
    public function getInstructorLanguages(){
        
      return (['message'=>'success', 'languages' => languageResource::collection(Auth::user()->instructor->languages)]);
    }
    public function getInstructorCertificates(){
        return (['message'=>'success', 'certificates'=>Auth::user()->instructor->certificates]);
    }
    public function getInstructorEducation(){
        return (['message'=>'success', 'education' => Auth::user()->instructor->education]);
    }
    public function getInstructorTestemonials(){
        return (['message'=>'success', 'testimonials' => Auth::user()->instructor->testimonials]) ;
    }
    public function getInstructorTrack(){
        return (['message'=>'success', 'track' => new TrackResource( Auth::user()->instructor->superTrack)]);
    }
    public function getInstructorSkiils(){
        return (['message'=>'success', 'skills' => Auth::user()->instructor->skills]);
    }
    public function getInstructorMajor(){
        return (['message'=>'success', 'major' => Auth::user()->instructor->major]);
    }
}
