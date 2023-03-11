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
    Route::get('/show/order/{order}', [OrderController::class, 'show']);
    Route::get('/show/user/order', [OrderController::class, 'showOrders']);
    Route::get('/complete/order/{order}', [OrderController::class, 'completeOrder']);
    Route::post('/orders/store', [OrderController::class, 'store']);
    Route::delete('/orders/delete/{order}', [OrderController::class, 'destroy'])->middleware('auth:sanctum');
    Route::put('/orders/update/{order}', [OrderController::class, 'update'])->name('orders.update');
    Route::get('/accept/offer/{offer}', [OrderController::class, 'acceptOffer']);
    
    //offer
    Route::post('/offer/store', [offerController::class, 'store']);

});
