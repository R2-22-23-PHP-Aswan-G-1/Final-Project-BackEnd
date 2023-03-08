
<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Auth;

// Route::get('/users', [UserController::class ,'index'])->name('users.index');
//user questions route
Route::get('/user/getUserQuestions/{user_id}', [UserController::class ,'getUserQuestions'])->name('user.getUserQuestions');
//user replies route
Route::get('/user/getUserReplies/{user_id}', [UserController::class ,'getUserReplies'])->name('user.getUserReplies');
//user order route
Route::get('/user/getUserOrders/{user_id}', [UserController::class ,'getUserOrders'])->name('user.getUserOrders');

//image
Route::get('/user/show/image/{user}', [UserController::class ,'getUserImage']);
Route::post('/user/store/image', [UserController::class ,'setUserImage'])->middleware("auth:sanctum");

?>