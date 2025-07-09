<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'index']);

Route::match(['get', 'post'], '/login', [PagesController::class, 'login'])->name('login');

Route::get('/password', [PagesController::class, 'password'])->name('password');

Route::get('/register', [PagesController::class, 'register'])->name('register');

Route::get('/api/dados', function () {
    return response()->json([
        'labels' => ['Janeiro', 'Fevereiro', 'Março'],
        'values' => [10, 20, 15],
    ]);
});

Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');