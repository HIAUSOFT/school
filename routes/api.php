<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::get('/students', [App\Http\Controllers\Api\StudentController::class, 'index']);
});
