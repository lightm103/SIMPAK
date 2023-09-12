<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKendaraanController;
use App\Http\Controllers\DataPerangkatController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SearchController::class, 'index']);

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/datakendaraan', DataKendaraanController::class);
Route::resource('/dataperangkat', DataPerangkatController::class);