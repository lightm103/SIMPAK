<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKendaraanController;
use App\Http\Controllers\DataPerangkatController;
use App\Http\Controllers\PajakController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/datakendaraan', DataKendaraanController::class);
Route::resource('/dataperangkat', DataPerangkatController::class);
Route::get('pages/datakendaraan/show/{id}', 'DataKendaraanController@show')->name('pages.datakendaraan.show');
Route::get('/search', 'SearchController@search');
Route::get('/searchData', [HomeController::class, 'searchData'])->name('searchData');
Route::resource('/pajak', PajakController::class);
