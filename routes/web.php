<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKendaraanController;
use App\Http\Controllers\DataPerangkatController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController; // Tambahkan ini
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index']);

// Grup rute dengan middleware dan prefix admin
Route::prefix('admin')->as('admin.')->middleware([IsAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/datakendaraan', DataKendaraanController::class);
    Route::resource('/dataperangkat', DataPerangkatController::class);
    Route::resource('/pajak', PajakController::class);
    Route::resource('/users', UserController::class); // Tambahkan ini
});

Route::get('pages/datakendaraan/show/{id}', [DataKendaraanController::class, 'show'])->name('pages.datakendaraan.show');
Route::get('/search', [SearchController::class, 'search']);
Route::get('/searchData', [HomeController::class, 'searchData'])->name('searchData');

// Rute untuk autentikasi admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
