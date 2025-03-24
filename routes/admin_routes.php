<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;

// middlewares
use App\Http\Middleware\AdminAuthCheck;
use App\Http\Middleware\notAdminLoggedIn;

Route::get('/',[AdminController::class,'index']);
Route::get('/login',[AdminController::class,'login'])->name('admin.login')->middleware(notAdminLoggedIn::class);
Route::post('/login',[AdminController::class,'matchAdmin'])->name('admin.match');
Route::get('/register',[AdminController::class,'register'])->name('admin.register');
Route::post('/register',[AdminController::class,'saveAdmin'])->name('admin.save');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard')->middleware(AdminAuthCheck::class);
Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
Route::get('teachers-list', [AdminController::class, 'showTeachers'])->name('admin.teacherslist');
Route::get('/teachers-records',[AdminController::class,'getTeachers'])->name('admin.teachersdata');
Route::get('/teacher/{id}',[AdminController::class,'editTeacher'])->name('teacher.edit');
