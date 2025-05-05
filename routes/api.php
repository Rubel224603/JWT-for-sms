<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentApiController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function() {

    Route::get('student/list',[StudentApiController::class,'index']);
    Route::get('student/list/{id}',[StudentApiController::class,'find']);
    Route::post('/student/store',[StudentApiController::class,'store']);
    Route::post('student/update/{id}',[StudentApiController::class,'update']);
    Route::get('student/delete/{id}',[StudentApiController::class,'delete']);


});
