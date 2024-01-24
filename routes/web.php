<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\http\Controllers\Auth\LogoutController;
use App\http\Controllers\Auth\LoginController;
use App\http\Controllers\Auth\RegisterController;






// Route::get('/', function () {
//     return view('admin.admin-front');
// })->middleware('redirect.notauthenticated');


// These pages will be accessed only when the admin is logged in
Route::middleware(['redirect.notauthenticated'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});
// These pages will not be accessed when the admin is logged in

Route::middleware(['custom.middleware'])->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});
