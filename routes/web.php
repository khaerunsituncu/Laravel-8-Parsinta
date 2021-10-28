<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ContactController, HomeController, LoginController, LogoutController, ProfileInformationController, RegisterationController, TaskController, UserController};

Route::get('/', HomeController::class);

Route::get('/profile/{indentifier}', ProfileInformationController::class);

// Route::get('/tasks', [TaskController::class, 'index']);
// Route::post('/tasks', [TaskController::class, 'store']);
// Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('/tasks/{id}', [TaskController::class, 'update']);
// Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);


Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/{user}', [UserController::class, 'show']);

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);

Route::middleware('auth')->group(function (){
    Route::resource('tasks', TaskController::class)->middleware('auth');
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function (){
    Route::get('register', [RegisterationController::class, 'create'])->name('register');
    Route::post('register', [RegisterationController::class, 'store']);
    
    Route::get('login', [LoginController::class,'login'])->name('login');
    Route::post('login', [LoginController::class,'check']);
});

// Route::get('/', fn () => view('home')); // 7.4 
// Route::view('/contact', 'contact');
// Route::view('/about', 'about');
// Route::get('/profile/{username}', function ($username) {
//     return view('profile', ['name' => $username]);
// });

