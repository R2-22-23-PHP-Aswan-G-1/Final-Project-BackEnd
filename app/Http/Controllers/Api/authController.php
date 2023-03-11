<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\instructorResource;
use App\Http\Resources\LoginResource;
use App\Http\Resources\userResource;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        //
    }

    public function register(StoreUserRequest $request)
    {
        $user=User::create([
            'role_id' => $request['role_id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        if($user){
            $user = User::where('id', $user->id)->first();
            return (['message'=>'success' ,'data'=>new LoginResource($user) ,'token'=> $user->createToken($user->email)->plainTextToken]);
        }
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response(["message"=>"Invalid Email Or Password"]);
        }else {
            return (['message'=>'success' ,'data'=>new LoginResource($user) ,'token'=> $user->createToken($user->email)->plainTextToken,
        ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return (['message'=>'success']);
    }
}
