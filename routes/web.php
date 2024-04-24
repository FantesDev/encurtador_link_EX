<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/redirect', [App\Http\Controllers\IndexController::class, 'redirect'])->name('redirect');

Route::get('/register', [App\Http\Controllers\AccountController::class, 'register'])->name('register');

Route::get('/recover', [App\Http\Controllers\AccountController::class, 'recover'])->name('recover');

Route::get('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('login');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('logout');

Route::prefix('/app')->group(function () {
    Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate'])->name('generate');
    Route::get('/remove', [App\Http\Controllers\LinkController::class, 'remove'])->name('remove');
    Route::get('/list', [App\Http\Controllers\LinkController::class, 'list'])->name('list');
});
