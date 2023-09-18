<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKendaraanController;
use App\Http\Controllers\DataPerangkatController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;

// Public Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [SearchController::class, 'search']);
Route::get('/searchData', [HomeController::class, 'searchData'])->name('searchData');
Route::get('pages/datakendaraan/show/{id}', [DataKendaraanController::class, 'show'])->name('pages.datakendaraan.show');

// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Protected Routes
Route::middleware([IsAdmin::class])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/datakendaraan', DataKendaraanController::class);
    Route::resource('/dataperangkat', DataPerangkatController::class);
    Route::resource('/pajak', PajakController::class);
    Route::resource('/users', UserController::class);
});
