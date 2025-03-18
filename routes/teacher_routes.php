<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Teacher\TeacherController;

use App\Http\Middleware\AuthCheck;


Route::get('/',[TeacherController::class,'index'])->name('teacher.index');
Route::get('/login',[TeacherController::class,'login'])->name('teacher.login');
Route::post('/login',[TeacherController::class,'matchTeacher'])->name('teacher.match');
Route::get('/register',[TeacherController::class,'register'])->name('teacher.register');
Route::post('/register',[TeacherController::class,'saveTeacher'])->name('teacher.save');
Route::get('/dashboard',[TeacherController::class,'dashboard'])->name('teacher.dashboard')->middleware(AuthCheck::class);
Route::get('/logout',[TeacherController::class,'logout'])->name('teacher.logout');