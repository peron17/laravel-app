<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// route name prefix "admin."
Route::name('admin.')->group(function () {

    Route::get('login', [App\Http\Controllers\AuthController::class, 'loginAdmin'])->name('login');
    Route::post('login', [App\Http\Controllers\AuthController::class, 'loginAdmin'])->name('login.action');
    
    // check if logged in and authorized for admin
    Route::middleware(['adminauth'])->group(function () {
        Route::get('/', function() {
            return view('admin.dashboard');
        })->name('dashboard');

        // logout
        Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    });
    
    Route::get('401', function () {
        return view('admin.error.401');
    })->name('401');
});