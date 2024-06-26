<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//TASK 1
Route::middleware('token.validator')->group(function(){
//Number 1
Route::apiResource('/products', ProductController::class);
//Number 2
Route::post('products/upload/local', [ProductController::class, 'uploadImageLocal']);
Route::post('products/upload/public', [ProductController::class, 'uploadImagePublic']);
});