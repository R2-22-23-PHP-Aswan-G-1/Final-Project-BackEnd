<?php

use App\Http\Controllers\Api\certificateController;
use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Models\Instructor;
use App\Http\Controllers\Api\InstructorController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TestController;

Route::middleware('auth:sanctum')->group(function () {

});

Route::get('/show/tests/{subtrack}',[TestController::class, 'show']);
Route::post('/test/answers',[TestController::class, 'index'])->middleware('auth:sanctum');
