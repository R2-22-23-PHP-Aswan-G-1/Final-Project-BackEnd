<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Api\QuestionController;

//questions routes
Route::get('/questions', [QuestionController::class ,'index'])->name('questions.index');
Route::get('/questions/show/{question_id}', [QuestionController::class ,'show'])->name('questions.show');
Route::post('/questions/store' , [QuestionController::class ,'store'])->name('questions.store');
Route::post('/questions/update/{question_id}' , [QuestionController::class ,'update'])->name('questions.update');
Route::delete('/questions/delete/{question_id}' , [QuestionController::class ,'destroy'])->name('questions.destroy');
?>