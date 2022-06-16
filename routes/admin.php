<?php

use Illuminate\Support\Facades\Route;

Route::get('login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');

// check if logged in and authorized for admin
Route::middleware(['adminauth'])->group(function () {
    Route::get('/', function() {
        return view('admin.dashboard');
    });


});

Route::get('401', function () {
    return view('admin.error.401');
})->name('admin.401');