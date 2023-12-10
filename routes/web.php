<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardRuanganController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\RegisterController;
use App\Models\Ruangan;
use Illuminate\Support\Facades\Route;

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

/**
 * Route::get('/', function () {
 *   return view('welcome');
 * });
 */

Route::get('/', [LandingController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/ruangan', DashboardRuanganController::class)->middleware('auth');

Route::resource('/', PeminjamanController::class);

Route::resource('/dashboard/pinjaman', PinjamanController::class)->middleware('auth');

Route::get('/dashboard/pinjaman/download/rundowns/{pdf}', [FileController::class, 'downloadFile'])->middleware('auth');

// buatan sendiri
// Route::get('/dashboard/pinjaman', function () {
//   return view('pinjaman');
// });

Route::get('/testing', function () {
  return view('testing', [
    'ruangan' => Ruangan::select('nama_ruangan', 'kapasitas_ruangan', 'lokasi')->get()
  ]);
});
