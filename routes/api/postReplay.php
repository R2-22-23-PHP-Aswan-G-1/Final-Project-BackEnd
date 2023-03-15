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

//Instructor Profile

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/storePost', [PostController::class, 'store']);
    Route::post('/addPostComment', [PostController::class, 'addComment']);
    Route::put('/update/comment/{comment}', [PostController::class, 'updateComment']);
    Route::delete('/delete/comment/{comment}', [PostController::class, 'deleteComment']);
    Route::delete('/deletePost/{post}', [PostController::class, 'destroy']);
    Route::put('/updatePost/{post}', [PostController::class, 'update']);
    Route::get('/posts', [PostController::class, 'index']);    

});
