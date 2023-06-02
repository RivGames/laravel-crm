<?php

use App\Http\Controllers\Api\v1\ProjectController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('projects', ProjectController::class)->middleware(['auth:sanctum']);
});
