<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;

// =========================
// ROUTE LOGIN
// =========================
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// =========================
// ROUTE DASHBOARD
// =========================
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// =========================
// ROUTE CRUD (tanpa database)
// =========================
Route::prefix('crud')->group(function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud.index');
    Route::get('/create', [CrudController::class, 'create'])->name('crud.create');
    Route::post('/store', [CrudController::class, 'store'])->name('crud.store');
    Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');
    Route::post('/update/{id}', [CrudController::class, 'update'])->name('crud.update');
    Route::get('/delete/{id}', [CrudController::class, 'delete'])->name('crud.delete');
});
