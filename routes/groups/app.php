<?php

use App\Http\Controllers\Api\AppController;
use Illuminate\Support\Facades\Route;

Route::get('status', [AppController::class, 'status'])->name('app.status');
