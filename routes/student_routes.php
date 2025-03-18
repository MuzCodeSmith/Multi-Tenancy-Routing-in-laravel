<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// controllers
use App\Http\Controllers\Student\StudentController;

// middlewares
use App\Http\Middleware\AuthCheck;


Route::get('/',[StudentController::class,'index'] );
Route::get('/login',[StudentController::class,'login'])->name('student.login');
Route::post('/login',[StudentController::class,'matchStudent'])->name('student.match');
Route::get('/register',[StudentController::class,'register'])->name('student.register');
Route::post('/register',[StudentController::class,'saveStudent'])->name('student.save');
Route::get('/dashboard',[StudentController::class,'dashboard'])->name('student.dashboard')->middleware(AuthCheck::class);
Route::get('/logout',[StudentController::class,'logout'])->name('student.logout');


