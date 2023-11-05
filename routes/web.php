<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Models\JadwalMU;
use App\Models\AlamatUDD;
use App\Models\StokDarah;
use App\Models\User;
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

Route::get('/', function() {
    return view ('v_landing.index', [
        'dataAlamatUDD' => AlamatUDD::all(),
        'dataStokDarah' => StokDarah::all(),
        'dataJadwalMU' => JadwalMU::all()
    ]);
});

// Registrasi
Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('v_dashboard.index');
})->middleware('auth');
