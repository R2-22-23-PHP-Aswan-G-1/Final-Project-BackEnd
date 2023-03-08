<?php

use App\Http\Controllers\Api\OfferController;
use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Api\OrderController;
use App\Models\Role;



Route::middleware('auth:sanctum')->group(function () {
    //orders
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/showOrderAccordingToTrack', [OrderController::class, 'showOrderAccordingToTrack']);
    // Route::get('/orders/show/{user_id}/{role}', [OrderController::class ,'show'])->name('orders.show');
    Route::get('/show/order/{order}', [OrderController::class, 'show']);
    Route::post('/orders/store', [OrderController::class, 'store']);
    Route::delete('/orders/delete/{order}', [OrderController::class, 'destroy'])->middleware('auth:sanctum');
    Route::put('/orders/update/{order}', [OrderController::class, 'update'])->name('orders.update');
    Route::post('/accept/instructor', [OrderController::class, 'acceptInstructor']);
    //offer
    Route::post('/offer/store', [offerController::class, 'store']);

});
