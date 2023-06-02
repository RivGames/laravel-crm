<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register')->name('auth.register');
    Route::post('login', 'login')->name('auth.login');
});
Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware(['auth:sanctum']);
