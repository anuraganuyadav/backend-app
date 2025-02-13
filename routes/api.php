<?php

use App\Http\Controllers\MultipleImagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/upload', [MultipleImagesController::class, 'store']);
Route::get('/users', [MultipleImagesController::class, 'index']);
Route::get('/show/{id}', [MultipleImagesController::class, 'show']);
Route::post('/update/{id}', [MultipleImagesController::class, 'update']);
Route::delete('/delete/{id}', [MultipleImagesController::class, 'destroy']);
