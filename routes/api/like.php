<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\LikeController;

//likes
Route::get('/likes' , [LikeController::class ,'index'])->name('likes.index');
Route::post('/likes/store' , [LikeController::class ,'store'])->name('likes.store');
Route::delete('/likes/destroy/{like}' , [LikeController::class ,'destroy'])->name('likes.destroy');
Route::put('/likes/update/{like}' , [LikeController::class ,'update'])->name('likes.update');
?>