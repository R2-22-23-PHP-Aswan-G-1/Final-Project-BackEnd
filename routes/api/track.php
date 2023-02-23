<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Instructor;
use App\Http\Controllers\Api\subTrackController;
use App\Http\Controllers\Api\TrackController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/allTracks' , ['App\Http\Controllers\Api\trackController','index'])->name('tracks');
Route::post('/storeTrack' , ['App\Http\Controllers\Api\trackController','store'])->name('storeTracks');
Route::post('/storeSubTrack' , ['App\Http\Controllers\Api\subtrackController','store'])->name('storeTracks');
Route::get('/allSubTracks' , ['App\Http\Controllers\Api\subtrackController','index'])->name('subTracks');
