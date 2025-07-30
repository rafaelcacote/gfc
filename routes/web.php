<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormaPagamentoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('formas-pagamento', FormaPagamentoController::class);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
