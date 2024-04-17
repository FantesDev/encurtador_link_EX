<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Route::get('/redirect', [App\Http\Controllers\IndexController::class, 'redirect']);

Route::get('/register', [App\Http\Controllers\AccountController::class, 'register']);

Route::get('/recover', [App\Http\Controllers\AccountController::class, 'recover']);

Route::get('/login', [App\Http\Controllers\AccountController::class, 'login']);

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout']);

Route::prefix('/app')->group(function () {
    Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate']);
    Route::get('/remove', [App\Http\Controllers\LinkController::class, 'remove']);
    Route::get('/list', [App\Http\Controllers\LinkController::class, 'list']);
});
