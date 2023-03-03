<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\instructorResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index($id){

        return Uesr::all();
    }
    public function show(){
        
        return (['message'=> 'success' , 'data'=> new instructorResource( Auth::user()->instructor) ]);

    }
}
