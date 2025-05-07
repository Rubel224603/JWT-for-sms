<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\ApiControllerForSanctum;
use App\Http\Controllers\API\StudentShareControllerApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/sanctum/login',[ApiControllerForSanctum::class,'login']);

//student share api;

Route::get('/students',[StudentShareControllerApi::class,'allStudents']);
Route::get('/students/{id}',[StudentShareControllerApi::class,'singleStudent']);
Route::post('/students-add',[StudentShareControllerApi::class,'storeStudent']);



//sanctum;


//Route::middleware('auth:sanctum')->group(function(){
//
//    Route::get('/student/list',[ApiControllerForSanctum::class,'index']);
//    Route::get('/student/list/{id}',[ApiControllerForSanctum::class,'find']);
//    Route::post('/student/store',[ApiControllerForSanctum::class,'store']);
//    Route::post('/student/update/{id}',[ApiControllerForSanctum::class,'update']);
//
//    Route::get('/student/delete/{id}',[ApiControllerForSanctum::class,'delete']);
//});



//jwt;
//Route::post('/login', [AuthController::class, 'login']);
//
//Route::middleware('auth:api')->group(function() {
//
//    Route::get('student/list',[StudentApiController::class,'index']);
//    Route::get('student/list/{id}',[StudentApiController::class,'find']);
//    Route::post('/student/store',[StudentApiController::class,'store']);
//    Route::post('student/update/{id}',[StudentApiController::class,'update']);
//    Route::get('student/delete/{id}',[StudentApiController::class,'delete']);
//
//
//});
