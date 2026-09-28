<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'static.homepage');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/cars', [CarController::class, 'index'])->name('admin.car.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('admin.car.create');
    Route::post('/cars', [CarController::class, 'store'])->name('admin.car.store');
    Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('admin.car.edit');
    Route::put('/cars/{car}', [CarController::class, 'update'])->name('admin.car.update');
    Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('admin.car.destroy');
});