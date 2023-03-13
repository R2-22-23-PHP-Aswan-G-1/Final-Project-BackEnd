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
});

Route::get('/getInstructorPosts/{user}', [profileController::class, 'getInstructorPosts']);
Route::get('/getInstructorCertificates/{user}', [profileController::class, 'getInstructorCertificates']);
Route::get('/getInstructorEducation/{user}', [profileController::class, 'getInstructorEducation']);
Route::get('/getInstructorTestemonials/{user}', [profileController::class, 'getInstructorTestemonials']);
Route::get('/getInstructorTrack/{user}', [profileController::class, 'getInstructorTrack']);
Route::get('/getInstructorSubTrack/{user}', [profileController::class, 'getInstructorSubTrack']);
Route::get('/getInstructorSkiils/{user}', [profileController::class, 'getInstructorSkiils']);
Route::get('/getInstructorLanguages/{user}', [profileController::class, 'getInstructorLanguages']);
Route::get('/getInstructorEducation/{user}', [profileController::class, 'getInstructorEducation']);
Route::get('/getInstructorProfile/{user}', [profileController::class, 'getInstructorProfile']);
Route::get('/getInstructorWorkHistory/{user}', [profileController::class, 'getInstructorWorkHistory']);
Route::get('/topTenInstructors', [InstructorController::class, 'topTenInstructors']);
Route::get('/getInstructorVerifiedSubTrack/{user}', [profileController::class, 'getInstructorVerifiedSubTrack']);
