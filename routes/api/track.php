<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Instructor;
use App\Http\Controllers\Api\subTrackController;
use App\Http\Controllers\Api\TrackController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Super Track
Route::get('/allTracks' , ['App\Http\Controllers\Api\supertrackController','index'])->name('tracks');
Route::post('/storeTrack' , ['App\Http\Controllers\Api\supertrackController','store'])->name('storeTracks');
Route::get('/superTrack/{supertrack}' , ['App\Http\Controllers\Api\supertrackController','show'])->name('superTrack.show');


//Sub Track
Route::post('/storeSubTrack' , ['App\Http\Controllers\Api\subtrackController','store'])->name('storeTracks');
Route::get('/allSubTracks' , ['App\Http\Controllers\Api\subtrackController','index'])->name('subTracks');
Route::get('/subTrack/{subtrack}' , ['App\Http\Controllers\Api\subtrackController','show'])->name('subTrack.show');
