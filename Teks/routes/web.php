<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;

Route::get('/', [TextController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [TextController::class, 'admin']);
    Route::post('/admin/update', [TextController::class, 'update']);
});

Auth::routes();
