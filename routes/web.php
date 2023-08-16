<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KeluarController;
use App\Http\Controllers\admin\MahasiswaController;
use App\Http\Controllers\admin\MasukController;
use App\Http\Controllers\admin\UKMController;
use App\Http\Controllers\user\ProfilUserController;
use App\Models\MahasiswaNurulWafa;

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

// Login 
Route::get('/', [LoginController::class, "index"])->name('login');
Route::post('user/login', [LoginController::class, "login"]);

// Logout
Route::get('Logout', [LoginController::class, "logout"]);


Route::middleware('auth')->group(function () {
    // Admin
    Route::get('Profil-Admin', [ProfilController::class, "profil"]);
    Route::get('admin', [DashboardController::class, "index"])->name('dashboard');

    // UKM
    Route::get('Data_UKM', [UKMController::class, "index"])->name('ukm.index');
    Route::get('Data_UKM/create', [UKMController::class, "create"])->name('ukm.create');
    Route::post('Data_UKM/store', [UKMController::class, "store"])->name('ukm.store');
    Route::get('Data_UKM/{id}/edit', [UKMController::class, "edit"])->name('ukm.edit');
    Route::put('Data_UKM/{id}', [UKMController::class, "update"])->name('ukm.update');
    Route::get('Data_UKM/{id}', [UKMController::class, "destroy"])->name('ukm.destroy');

    // Anggota
    Route::get('Data_UKM', [UKMController::class, "index"])->name('ukm.index');
    Route::get('Data_UKM/create', [UKMController::class, "create"])->name('ukm.create');
    Route::post('Data_UKM/store', [UKMController::class, "store"])->name('ukm.store');
    Route::get('Data_UKM/{id}/edit', [UKMController::class, "edit"])->name('ukm.edit');
    Route::put('Data_UKM/{id}', [UKMController::class, "update"])->name('ukm.update');
    Route::get('Data_UKM/{id}', [UKMController::class, "destroy"])->name('ukm.destroy');

    // Mahasiswa
    Route::get('Data_Mahasiswa', [MahasiswaController::class, "index"])->name('mahasiswa.index');
    Route::get('Data_Mahasiswa/create', [MahasiswaController::class, "create"])->name('mahasiswa.create');
    Route::post('Data_Mahasiswa/store', [MahasiswaController::class, "store"])->name('mahasiswa.store');
    Route::get('Data_Mahasiswa/{id}/edit', [MahasiswaController::class, "edit"])->name('mahasiswa.edit');
    Route::put('Data_Mahasiswa/{id}', [MahasiswaController::class, "update"])->name('mahasiswa.update');
    Route::get('Data_Mahasiswa/{id}', [MahasiswaController::class, "destroy"])->name('mahasiswa.destroy');
    Route::get('Data_Mahasiswa/print', [MahasiswaController::class, 'print'])->name('mahasiswa.print');

    // User
    Route::get('Profil-User', [ProfilUserController::class, "user_profil"]);
    Route::get('User', [UserController::class, "index"]);
    Route::get('Form_Lamaran', [UserController::class, "pendaftar"]);
    Route::post('user/store', [UserController::class, "store"]);
});
