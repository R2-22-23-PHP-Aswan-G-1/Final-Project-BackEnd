<?php

use App\Http\Controllers\Api\supertrackController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// services and its orders

Route::get('/show/orders/{service}', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('/show/track/question/{subtrack}', [App\Http\Controllers\questionController::class, 'filter_subtrack_question'])->name('track.questions.show');
Route::get('/show/track/{track}', [App\Http\Controllers\supertrackController::class, 'show'])->name('tracks.show');
Route::get('/edit/{track}' , [App\Http\Controllers\supertrackController::class, 'edit'])->name('track.edit');
Route::get('/show/instructors/{track}', [App\Http\Controllers\InstructorController::class, 'show'])->name('track.instructors.show');

Route::post('/update/{track}' , [App\Http\Controllers\supertrackController::class, 'update'])->name('track.update');

Route::get('/show/test/{subtrack}', [App\Http\Controllers\TestController::class, 'show'])->name('tests.show');
Route::get('/create/test/{subtrack}', [App\Http\Controllers\TestController::class, 'create'])->name('tests.create');
Route::post('/store/test', [App\Http\Controllers\TestController::class, 'store'])->name('tests.store');

// Route::get('/notification', function () {
//     return view('notification');
// });

// Route::get('send',[PusherNotificationController::class, 'notification']);
