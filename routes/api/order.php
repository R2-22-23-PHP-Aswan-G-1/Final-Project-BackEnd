<?php
use App\Http\Resources\userResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Api\OrderController;
use App\Models\Role;



//orders
Route::get('/orders' , [OrderController::class ,'index'])->name('orders.index');
// Route::get('/orders/show/{user_id}/{role}', [OrderController::class ,'show'])->name('orders.show');
Route::get('/orders/show/{order_id}' , [OrderController::class ,'show'])->name('orders.show');
Route::post('/orders/store' , [OrderController::class ,'store'])->name('orders.store');
Route::delete('/orders/delete/{order}' , [OrderController::class ,'destroy'])->name('orders.destroy');
Route::put('/orders/update/{order}' , [OrderController::class ,'update'])->name('orders.update');

?>