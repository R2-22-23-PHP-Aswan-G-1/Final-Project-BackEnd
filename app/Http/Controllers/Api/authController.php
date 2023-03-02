<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\instructorResource;
use App\Http\Resources\userResource;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Role;


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
            return new userResource(User::findOrFail($user->id));
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
        }
        if($user->role->name == "instructor"){
            return new instructorResource($user->instructor);
        }else{
            return new userResource($user);
        }
    }

    public function destroy(User $user)
    {
        //
    }
}
