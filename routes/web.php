<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/',[AuthController::class,'registerPage'])->name('register.page');
// Route::get('/register',[AuthController::class,'registerPage'])->name('register.page');
// Route::post('/register',[AuthController::class,'registerUser'])->name('register.user');
// Route::get('/login',[AuthController::class,'loginPage'])->name('login.page');
// Route::post('/login',[AuthController::class,'loginUser'])->name('login.user');


$host = request()->getHost(); // Get the current domain


switch ($host) {
    case config('app.student_domain'):
        require base_path('routes/student_routes.php'); // Admin Routes
        break;

    case config('app.teacher_domain'):

        require base_path('routes/teacher_routes.php'); // Frontend Routes
        break;
    default:
        require base_path('routes/client_routes.php');
}