<?php

use App\Http\Controllers\Api\supertrackController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlle;
use App\Http\Controllers\PusherNotificationController;
use App\Http\Controllers\questionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// services and its orders

Route::get('/show/orders/{service}', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('/show/track/question/{subtrack}', [App\Http\Controllers\questionController::class, 'filter_subtrack_question'])->name('track.questions.show');
Route::get('/show/track/{track}', [App\Http\Controllers\supertrackController::class, 'show'])->name('tracks.show');
Route::get('/notification', function () {
    return view('notification');
});

Route::get('send', [PusherNotificationController::class, 'notification']);
