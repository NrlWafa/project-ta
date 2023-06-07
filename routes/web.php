<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\PelamarController;
use App\Http\Controllers\admin\PenggunaController;
use App\Http\Controllers\landingpage\BerandaController;
use App\Http\Controllers\landingpage\BlogController;
use App\Http\Controllers\landingpage\FormasiPekerjaanController;
use App\Http\Controllers\landingpage\GaleriController;
use App\Http\Controllers\landingpage\KontakController;
use App\Http\Controllers\landingpage\LayananController;
use App\Http\Controllers\landingpage\ProfilPerusahaanController;
use App\Http\Controllers\user\UserController;
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

// Route::get('/', function () {
//     return view('home');
// });

// LandingPage
Route::get('/', [BerandaController::class,"index"] );
Route::get('Layanan', [LayananController::class,"index"] );

// LandingPage Blog
Route::get('Blog', [BlogController::class,"index"] );
Route::get('Pelatihan1', [BlogController::class,"pelatihan1"] );
Route::get('Pelatihan2', [BlogController::class,"pelatihan2"] );
Route::get('Pelatihan3', [BlogController::class,"pelatihan3"] );
Route::get('Rekrutmen1', [BlogController::class,"rekrutmen1"] );
Route::get('Rekrutmen2', [BlogController::class,"rekrutmen2"] );
Route::get('Rekrutmen3', [BlogController::class,"rekrutmen3"] );

// LandingPage
Route::get('profil-perusahaan', [ProfilPerusahaanController::class,"index"] );
Route::get('formasi-pekerjaan', [FormasiPekerjaanController::class,"index"] );
Route::get('Galeri', [GaleriController::class,"index"] );
Route::get('Kontak', [KontakController::class,"index"] );



// Admin
Route::get('admin', [DashboardController::class,"index"] );
Route::get('Dashboard-Detail-Pelamar', [DashboardController::class,"dashboarddetailpelamar"] );

Route::get('Login', [LoginController::class,"index"] );
Route::get('Pengguna', [PenggunaController::class,"index"] );

Route::get('Daftar-Pelamar', [PelamarController::class,"index"] );
Route::get('Detail-Data-Pelamar', [PelamarController::class,"pelamar"] );


// User
Route::get('Dashboard', [UserController::class,"index"] );
Route::get('Ajukan-Lamaran', [UserController::class,"pendaftar"] );


