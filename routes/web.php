<?php

use App\Http\Controllers\AlamatUDDController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalMUController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StokDarahController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'home']);
Route::get('/jadwalmu', [LandingController::class, 'jadwalmu']);
Route::get('/stokdarah', [LandingController::class, 'stokdarah']);
Route::get('/alamatudd', [LandingController::class, 'alamatudd']);
Route::get('/mediapublikasi', [LandingController::class, 'mediapublikasi']);

// Registrasi
Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Dashboard (AlamatUDD)
Route::resource('/dashboard/alamatudd', AlamatUDDController::class)->middleware('auth');

// Dashboard (StokDarah)
Route::resource('/dashboard/stokdarah', StokDarahController::class)->middleware('auth');

// Dashboard(Jadwal MU)
Route::resource('/dashboard/jadwalmu', JadwalMUController::class)->middleware('auth');
