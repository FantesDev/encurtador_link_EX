<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/redirect', [App\Http\Controllers\IndexController::class, 'redirect'])->name('redirect');

Route::get('/register', [App\Http\Controllers\AccountController::class, 'register'])->name('register');

Route::get('/recover', [App\Http\Controllers\AccountController::class, 'recover'])->name('recover');

Route::get('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('login');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('logout');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('contato');
Route::post('/contato/enviar', [App\Http\Controllers\ContatoController::class, 'enviar'])->name('contato.enviar');

Route::prefix('/app')->group(function () {
    Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate'])->name('generate');
    Route::get('/form', [App\Http\Controllers\LinkController::class, 'showForm'])->name('form');
Route::post('/store', [App\Http\Controllers\LinkController::class, 'store'])->name('store');
Route::get('/list', [App\Http\Controllers\LinkController::class, 'list'])->name('list');
Route::post('/remove', [App\Http\Controllers\LinkController::class, 'remove'])->name('remove');

});
