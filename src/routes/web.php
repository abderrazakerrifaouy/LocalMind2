<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

Route::middleware('guest')->group(
    function (){
        Route::get('/', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');
        Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
        Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    }
);

Route::middleware('auth')->group(function () {
   Route::get('/dashboardUser', [HomeController::class, 'index'])->name('dashboardUser');
   Route::get('/creteQestion' , [QuestionController::class , 'create'])->name('create');
   Route::post('/creteQestion' , [QuestionController::class , 'store'])->name('create.post');
   Route::get('/qestion/{id}' , [QuestionController::class , 'show'])->name('qestion');
   
   
});

// Route::middleware(['auth', 'role:user'])->group(function () {
// Route::get('/dashboardUser', [HomeController::class, 'index'])->name('dashboardUser');
// });


// // Admin routes
// Route::middleware(['auth', 'role:admin'])->group(function () {
// Route::get('/dashboardAdmin', [AdminController::class, 'index'])->name('dashboardAdmin');
// });
   