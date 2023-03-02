<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Api\ServiceController;
use App\Models\Role;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//services
Route::get('/services' , [ServiceController::class ,'index'])->name('services.index');
Route::post('/services/store' , [ServiceController::class ,'store'])->name('services.store');
Route::delete('/services/delete/{service}' , [ServiceController::class ,'destroy'])->name('services.destroy');
Route::put('/services/update/{service}' , [ServiceController::class ,'update'])->name('services.update');


