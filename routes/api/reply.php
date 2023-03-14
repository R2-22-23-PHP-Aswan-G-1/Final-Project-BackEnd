<?php


use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\ReplyController;

//replies routes
Route::get('/replies', [ReplyController::class ,'index'])->name('replies.index');
Route::get('/replies/show/{reply_id}' , [ReplyController::class ,'show'])->name('replies.show');
Route::post('/replies/store' , [ReplyController::class ,'store'])->name('replies.store');
Route::post('/replies/update/{reply_id}' , [ReplyController::class ,'update'])->name('replies.update');
Route::delete('/replies/delete/{reply_id}' , [ReplyController::class ,'destroy'])->name('replies.delete');


