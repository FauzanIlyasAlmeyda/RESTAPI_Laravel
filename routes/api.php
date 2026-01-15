<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test_api', [produkController::class , 'index']);
Route::get('/find_api/{id}', [produkController::class , 'show']);
Route::delete('/delete_api/{id}', [produkController::class , 'destroy']);
Route::post('/create_api', [produkController::class , 'store']);