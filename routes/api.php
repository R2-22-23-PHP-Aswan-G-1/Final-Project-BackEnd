<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\LikeController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login' , ['App\Http\Controllers\Api\authController','login'])->name('login');
Route::post('/register' , ['App\Http\Controllers\Api\authController','register'])->name('register');


Route::middleware('auth:sanctum')->group(function () {
    // return $request->user();
});
//questions
Route::get('/questions', [QuestionController::class ,'index'])->name('questions.index');
Route::get('/questions/{user_id}', [QuestionController::class ,'show'])->name('questions.show');
Route::post('/questions' , [QuestionController::class ,'store'])->name('questions.store');
Route::delete('/questions/{question}' , [QuestionController::class ,'destroy'])->name('questions.destroy');
Route::put('/questions/{question}' , [QuestionController::class ,'update'])->name('questions.update');
//services
Route::get('/services' , [ServiceController::class ,'index'])->name('services.index');
Route::post('/services' , [ServiceController::class ,'store'])->name('services.store');
Route::delete('/services/{service}' , [ServiceController::class ,'destroy'])->name('services.destroy');
Route::put('/services/{service}' , [ServiceController::class ,'update'])->name('services.update');
//orders
Route::get('/orders' , [OrderController::class ,'index'])->name('orders.index');
Route::post('/orders' , [OrderController::class ,'store'])->name('orders.store');
Route::delete('/orders/{order}' , [OrderController::class ,'destroy'])->name('orders.destroy');
Route::put('/orders/{order}' , [OrderController::class ,'update'])->name('orders.update');
//likes
Route::get('/likes' , [LikeController::class ,'index'])->name('likes.index');
Route::post('/likes' , [LikeController::class ,'store'])->name('likes.store');
Route::delete('/likes/{like}' , [LikeController::class ,'destroy'])->name('likes.destroy');
Route::put('/likes/{like}' , [LikeController::class ,'update'])->name('likes.update');



//skills
Route::get('/skills',[ SkillController::class,'index']);
Route::post('/skills',[SkillController::class, 'store']);
Route::get('/skills/{id}',[SkillController::class,'show']);
Route::delete('/skills/{id}',[SkillController::class,'destroy']);
Route::post('/skills/{id}',[SkillController::class,'update']);
//testimonials
Route::get('/testimonials',[ TestimonialController::class,'index']);
Route::post('/testimonials',[TestimonialController::class, 'store']);
Route::get('/testimonials/{id}',[TestimonialController::class,'show']);
Route::delete('/testimonials/{id}',[TestimonialController::class,'destroy']);
Route::post('/testimonials/{id}',[TestimonialController::class,'update']);
