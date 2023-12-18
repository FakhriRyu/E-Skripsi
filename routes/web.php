<?php

use App\Http\Controllers\Dosen\BimbinganDosenController;
use App\Http\Controllers\Dosen\MonitoringDosenController;
use App\Http\Controllers\Mahasiswa\SkripsiController;
use App\Models\Dosen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\PembimbingController;
use App\Http\Controllers\Mahasiswa\BimbinganController;
use App\Http\Controllers\Dosen\DashboardDosenController;
use App\Http\Controllers\Mahasiswa\DashboardMahasiswaController;

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

Route::get('/login', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'login'])->name('login');
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/create', [MahasiswaController::class, 'create'])->name('admin.mahasiswa.create');
    Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('admin.mahasiswa.index');
    Route::post('/admin/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/admin/{id}/edit', [MahasiswaController::class, 'edit'])->name('admin.mahasiswa.edit');
    Route::put('/admin/{id}/update', [MahasiswaController::class, 'update'])->name('admin.mahasiswa.update');
    Route::delete('/admin/mahasiswa/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('admin.mahasiswa.destroy');

    Route::get('/admin/dosen', [DosenController::class, 'index'])->name('admin.dosen.index');
    Route::get('/admin/dosen/create', [DosenController::class, 'create'])->name('admin.dosen.create');
    Route::post('/admin/dosen', [DosenController::class, 'store'])->name('admin.dosen.store');
    Route::get('/admin/dosen/{id}/edit', [DosenController::class, 'edit'])->name('admin.dosen.edit');
    Route::put('/admin/dosen/{id}/update', [DosenController::class, 'update'])->name('admin.dosen.update');
    Route::delete('/admin/dosen/{id}/destroy', [DosenController::class, 'destroy'])->name('admin.dosen.destroy');

    Route::get('/admin/pembimbing', [PembimbingController::class, 'index'])->name('admin.pembimbing.index');
    Route::get('/admin/pembimbing/create', [PembimbingController::class, 'create'])->name('admin.pembimbing.create');
    Route::post('/admin/pembimbing/store', [PembimbingController::class, 'store'])->name('admin.pembimbing.store');
    Route::get('/admin/pembimbing/{id}/edit', [PembimbingController::class, 'edit'])->name('admin.pembimbing.edit');
    Route::put('/admin/pembimbing/{id}', [PembimbingController::class, 'update'])->name('admin.pembimbing.update');
    Route::delete('/admin/pembimbing/{id}', [PembimbingController::class, 'destroy'])->name('admin.pembimbing.destroy');

    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.users.index');
    Route::post('/admin/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/admin/user/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/admin/user/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('/admin/user/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware(['auth', 'mahasiswa'])->group(function () {
    Route::get('/mahasiswa', [DashboardMahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
    Route::post('/mahasiswa/update-profile', [DashboardMahasiswaController::class, 'updateProfile'])->name('mahasiswa.updateProfile');
    Route::post('/mahasiswa/updatePassword', [DashboardMahasiswaController::class, 'updatePassword'])->name('mahasiswa.updatePassword');
    Route::get('/mahasiswa/monitoring', [BimbinganController::class, 'index'])->name('mahasiswa.monitoring.index');
    Route::get('/mahasiswa/bimbingan', [BimbinganController::class, 'create'])->name('mahasiswa.monitoring.create');
    route::post('mahasiswa/bimbingan', [BimbinganController::class, 'store'])->name('mahasiswa.monitoring.store');
    Route::get('mahasiswa/bimbingan/{id}', [BimbinganController::class, 'show'])->name('mahasiswa.monitoring.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('download-skripsi/{filename}', [BimbinganController::class, 'downloadSkripsi'])->name('download.skripsi');
});

Route::middleware(['auth', 'dosen'])->group(function () {
    Route::get('/dosen', [DashboardDosenController::class, 'index'])->name('dosen.dashboard');
    Route::post('/dosens/update-profile', [DashboardDosenController::class, 'updateProfile'])->name('dosens.updateProfile');
    Route::get('/dosen/monitoring', [MonitoringDosenController::class, 'index'])->name('dosen.monitoring');
    Route::get('/dosen/monitoring/{id}', [MonitoringDosenController::class, 'show'])
        ->name('dosens.monitoring.show');
    Route::get('/dosen/monitoring/{id}/{idp}', [MonitoringDosenController::class, 'show2'])
        ->name('dosens.monitoring.detail');
    Route::get('/dosen/monitoring-edit/{id}/{idp}', [MonitoringDosenController::class, 'edit'])
        ->name('dosens.monitoring.edit');
    Route::put('/dosen/monitoring-update/{id}/{idp}', [MonitoringDosenController::class, 'update'])
        ->name('dosens.monitoring.update');
    // Route::get('/dosen/bimbingan', [BimbinganDosenController::class, 'index'])->name('dosen.bimbingan');
});

Route::get('/logout', [SessionController::class, 'logout'])->middleware('auth');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::get('/mahasiswa', [DashboardMahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
//     Route::get('/dosen', [DashboardDosenController::class, 'index'])->name('dosen.dashboard');
// Route::get('/mahasiswa/bimbingan', [BimbinganController::class, 'index'])->name('mahasiswa.bimbingan.index');
// Route::post('/mahasiswa/bimbingan', [BimbinganController::class, 'store'])->name('mahasiswa.bimbingan.store');
// Route::get('/dosen/monitoring', [MonitoringDosenController::class, 'index'])->name('dosen.monitoring');
// // Route::get('/dosen/bimbingan', [BimbinganDosenController::class, 'index'])->name('dosen.bimbingan')->name('download.skripsi');;
