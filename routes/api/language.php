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
use App\Http\Controllers\Api\languageController;
use App\Http\Controllers\Api\profileController;




Route::middleware('auth:sanctum')->group(function () {
    Route::post('/storeLanguage', [languageController::class, 'store']);
    Route::get('/languages', [languageController::class, 'index']);
    Route::delete('/deleteLanguage/{language}', [languageController::class, 'destroy']);
    Route::delete('/instructor/delete/language/{language}', [profileController::class, 'instructor_delete_language']);
});
