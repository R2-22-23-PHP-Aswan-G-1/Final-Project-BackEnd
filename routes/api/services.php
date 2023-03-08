<?php

use App\Http\Controllers\api\ServiceController;
use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::get('/services', ['App\Http\Controllers\Api\ServiceController','index']);
