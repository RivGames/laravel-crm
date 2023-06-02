<?php

use App\Http\Controllers\Api\v1\ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('clients', ClientController::class)->middleware(['auth:sanctum']);
});
