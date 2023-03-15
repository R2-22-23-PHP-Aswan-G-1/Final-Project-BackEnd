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
use App\Http\Controllers\Api\profileController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/storeCertificate', [certificateController::class, 'store']);
    Route::post('/delete/certificate/{certificate}', [certificateController::class, 'destroy']);
    Route::post('/storeInstructorEducation', [InstructorController::class, 'storeInstructorEducation']);
    Route::post('/addLanguageToInstructor', [InstructorController::class, 'storeLanguage']);
    Route::post('/addSuperTrackToInstructor', [InstructorController::class, 'storeSuperTrack']);
    Route::post('/storeInstructorWorkHistory', [InstructorController::class, 'storeInstructorWorkHistory']);
    Route::post('/instructorSkill', [InstructorController::class, 'storeSkills']);
    Route::get('/instructor/{instructor}', [InstructorController::class, 'show']);
    Route::post('/update/instructor/education/{education}', [profileController::class, 'update_instructor_education']);
});

Route::get('/topTenInstructors', [InstructorController::class, 'topTenInstructors']);
