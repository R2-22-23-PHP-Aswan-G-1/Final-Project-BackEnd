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
use App\Http\Controllers\ChatController;
use App\Models\Role;



Route::middleware('auth:sanctum')->group(function () {
    Route::post('/send/message', [ChatController::class, 'send']);
    Route::post('/recive/message', [ChatController::class, 'show']);
});
