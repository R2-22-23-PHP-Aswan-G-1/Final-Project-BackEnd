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
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\subtrackController;
use App\Http\Controllers\Api\ReplyController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//forms routes
Route::post('/login' , ['App\Http\Controllers\Api\authController','login'])->name('login');
Route::post('/register' , ['App\Http\Controllers\Api\authController','register'])->name('register');


Route::middleware('auth:sanctum')->group(function () {
    // return $request->user();
});
//////////////////////////////////////////////////////routes for user, question , subtrack questions////////////////////

//user routes
Route::get('/users', [QuestionController::class ,'index'])->name('users.index');
//user questions route
Route::get('/user/getUserQuestions/{user_id}', [UserController::class ,'getUserQuestions'])->name('user.getUserQuestions');
//user replies route
Route::get('/user/getUserReplies/{user_id}', [UserController::class ,'getUserReplies'])->name('user.getUserReplies');
//user order route
Route::get('/user/getUserOrders/{user_id}', [UserController::class ,'getUserOrders'])->name('user.getUserOrders');

///////////////////////////////////////////////////////////////////////////////////////
//questions routes
Route::get('/questions', [QuestionController::class ,'index'])->name('questions.index');
Route::get('/questions/show/{question_id}', [QuestionController::class ,'show'])->name('questions.show');
Route::post('/questions/store' , [QuestionController::class ,'store'])->name('questions.store');
Route::post('/questions/update/{question_id}' , [QuestionController::class ,'update'])->name('questions.update');
Route::delete('/questions/delete/{question_id}' , [QuestionController::class ,'destroy'])->name('questions.destroy');


////////////////////////////////////////////////////////////////////////////////////////////////////////////
//subtrack questions route 
Route::get('/subtrack/getSubtrackQuestions/{subtrack_id}', [subtrackController::class ,'getSubtrackQuestions']);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//replies routes
Route::get('/replies', [ReplyController::class ,'index'])->name('replies.index');
Route::get('/replies/show/{reply_id}' , [ReplyController::class ,'show'])->name('replies.show');
Route::post('/replies/store' , [ReplyController::class ,'store'])->name('replies.store');
Route::post('/replies/update/{reply_id}' , [ReplyController::class ,'update'])->name('replies.update');
Route::delete('/replies/delete/{reply_id}' , [ReplyController::class ,'destroy'])->name('replies.delete');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//services
Route::get('/services' , [ServiceController::class ,'index'])->name('services.index');
Route::post('/services/store' , [ServiceController::class ,'store'])->name('services.store');
Route::delete('/services/delete/{service}' , [ServiceController::class ,'destroy'])->name('services.destroy');
Route::put('/services/update/{service}' , [ServiceController::class ,'update'])->name('services.update');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//orders
Route::get('/orders' , [OrderController::class ,'index'])->name('orders.index');
// Route::get('/orders/show/{user_id}/{role}', [OrderController::class ,'show'])->name('orders.show');
Route::get('/orders/show/{order_id}' , [OrderController::class ,'show'])->name('orders.show');
Route::post('/orders/store' , [OrderController::class ,'store'])->name('orders.store');
Route::delete('/orders/delete/{order}' , [OrderController::class ,'destroy'])->name('orders.destroy');
Route::put('/orders/update/{order}' , [OrderController::class ,'update'])->name('orders.update');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//likes
Route::get('/likes' , [LikeController::class ,'index'])->name('likes.index');
Route::post('/likes/store' , [LikeController::class ,'store'])->name('likes.store');
Route::delete('/likes/destroy/{like}' , [LikeController::class ,'destroy'])->name('likes.destroy');
Route::put('/likes/update/{like}' , [LikeController::class ,'update'])->name('likes.update');



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
