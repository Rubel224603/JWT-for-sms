<?php
use App\Http\Controllers\WelcomeControlle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;



Route::get('/',[WelcomeControlle::class,'index']);
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/student-add',[StudentController::class,'create'])->name('student.create');
    Route::post('/student-store',[StudentController::class,'store'])->name('student.store');
    Route::get('/student-edit/{id}',[StudentController::class,'edit'])->name('student.edit');
    Route::post('/student-update/{id}',[StudentController::class,'update'])->name('student.update');
    Route::get('/student-list',[StudentController::class,'allStudent'])->name('student.list');
    Route::get('/student-delete/{id}',[StudentController::class,'delete'])->name('student.delete');
});
