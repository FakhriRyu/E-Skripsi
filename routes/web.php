<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Mahasiswa\BimbinganController;
use App\Http\Controllers\Mahasiswa\DashboardMahasiswaController;
use App\Http\Controllers\Mahasiswa\SkripsiController;
use App\Http\Controllers\SessionController;
use App\Models\Dosen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\PembimbingController;

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

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/admin/create', [MahasiswaController::class, 'create'])->name('admin.mahasiswa.create');

Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('admin.mahasiswa.index');

Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

Route::get('/admin/{id}/edit', [MahasiswaController::class, 'edit'])->name('admin.mahasiswa.edit');

Route::put('/admin/{id}/update', [MahasiswaController::class, 'update'])->name('admin.mahasiswa.update');

Route::delete('/admin/mahasiswa/{id}/destroy', [MahasiswaController::class, 'destroy'])->name('admin.mahasiswa.destroy');


Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/pembimbing', [PembimbingController::class, 'index']);


Route::get('/admin/user', [UserController::class, 'index']);
Route::post('/admin/user', [UserController::class, 'store'])->name('users.store');



Route::get('/logout', [SessionController::class, 'logout']);

Route::middleware(['UserAkses'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/mahasiswa', [DashboardMahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
    Route::get('/dosen', [DashboardController::class, 'index'])->name('dosen.dashboard');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SessionController::class, 'index']);
    Route::post('/login', [SessionController::class, 'login'])->name('login');
});
Route::get('/Home', function(){
    return redirect('/login');
});

Route::middleware(['auth', 'mahasiswa'])->group(function () {
    Route::get('/mahasiswa', [DashboardMahasiswaController::class, 'index']);
});


Route::get('/mahasiswa/bimbingan', [BimbinganController::class, 'index'])->name('mahasiswa.bimbingan');