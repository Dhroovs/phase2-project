<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect('/login');
});

// Auth Routes
require __DIR__.'/auth.php';

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/records/create', [AdminController::class, 'create'])->name('admin.records.create');
    Route::post('/admin/records', [AdminController::class, 'store'])->name('admin.records.store');
    Route::get('/admin/records/{id}/edit', [AdminController::class, 'edit'])->name('admin.records.edit');
    Route::put('/admin/records/{id}', [AdminController::class, 'update'])->name('admin.records.update');
    Route::delete('/admin/records/{id}', [AdminController::class, 'destroy'])->name('admin.records.destroy');
});

// User Routes
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
