
<?php

use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Api\SkillController;



//skills
Route::get('/skills',[ SkillController::class,'index']);
Route::post('/skills',[SkillController::class, 'store']);
Route::get('/skills/{id}',[SkillController::class,'show']);
Route::delete('/skills/{id}',[SkillController::class,'destroy']);
Route::post('/skills/{id}',[SkillController::class,'update']);
