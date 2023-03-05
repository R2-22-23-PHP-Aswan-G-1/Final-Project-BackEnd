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
use App\Http\Controllers\Api\profileController;

//Instructor Profile

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/getInstructorPosts', [profileController::class, 'getInstructorPosts']);
    Route::get('/getInstructorCertificates', [profileController::class, 'getInstructorCertificates']);
    Route::get('/getInstructorEducation', [profileController::class, 'getInstructorEducation']);
    Route::get('/getInstructorTestemonials', [profileController::class, 'getInstructorTestemonials']);
    Route::get('/getInstructorTrack', [profileController::class, 'getInstructorTrack']);
    Route::get('/getInstructorSkiils', [profileController::class, 'getInstructorSkiils']);
    Route::get('/getInstructorLanguages', [profileController::class, 'getInstructorLanguages']);
    Route::get('/getInstructorEducation', [profileController::class, 'getInstructorEducation']);
});
