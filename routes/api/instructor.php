<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Models\Instructor;
use App\Http\Controllers\Api\InstructorController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
});

Route::post('/instructorSkill',[InstructorController::class,'storeSkills']);
Route::get('/instructor/{instructor}',[InstructorController::class,'show']);
Route::post('/storeCertificate' , [InstructorController::class,'store'])->middleware('auth:sanctum');
Route::post('/storePost' , [InstructorController::class,'store'])->middleware('auth:sanctum');
Route::get('/instructor/{id}' , function (Request $request) {
    $user = Instructor::where('user_id' , $request->id)->first();
    return $user->user;
});

