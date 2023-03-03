<?php
use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\TestimonialController;

//testimonials
Route::get('/testimonials',[ TestimonialController::class,'index']);
Route::post('/testimonials',[TestimonialController::class, 'store']);
Route::get('/testimonials/{id}',[TestimonialController::class,'show']);
Route::delete('/testimonials/{id}',[TestimonialController::class,'destroy']);
Route::post('/testimonials/{id}',[TestimonialController::class,'update']);