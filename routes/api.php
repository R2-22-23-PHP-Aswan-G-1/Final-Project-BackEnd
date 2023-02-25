<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Http\Controllers\Api\QuestionController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login' , ['App\Http\Controllers\Api\authController','login'])->name('login');
Route::post('/register' , ['App\Http\Controllers\Api\authController','register'])->name('register');


Route::middleware('auth:sanctum')->group(function () {
    // return $request->user();
});
Route::get('/questions' , [QuestionController::class ,'index'])->name('questions.index');
Route::post('/questions' , [QuestionController::class ,'store'])->name('questions.store');
Route::delete('/questions/{question}' , [QuestionController::class ,'destroy'])->name('questions.destroy');
Route::put('/questions/{question}' , [QuestionController::class ,'update'])->name('questions.update');
Route::get('/services' , [QuestionController::class ,'index'])->name('services.index');
Route::post('/services' , [QuestionController::class ,'store'])->name('services.store');
Route::delete('/services/{service}' , [QuestionController::class ,'destroy'])->name('services.destroy');
Route::put('/services/{service}' , [QuestionController::class ,'update'])->name('services.update');
Route::get('/orders' , [QuestionController::class ,'index'])->name('orders.index');
Route::post('/orders' , [QuestionController::class ,'store'])->name('orders.store');
Route::delete('/orders/{order}' , [QuestionController::class ,'destroy'])->name('orders.destroy');
Route::put('/orders/{order}' , [QuestionController::class ,'update'])->name('orders.update');
Route::get('/Likes' , [QuestionController::class ,'index'])->name('orders.index');
Route::post('/Likes' , [QuestionController::class ,'store'])->name('orders.store');
Route::delete('/Likes/{Like}' , [QuestionController::class ,'destroy'])->name('Like.destroy');
Route::put('/Likes/{Like}' , [QuestionController::class ,'update'])->name('Like.update');