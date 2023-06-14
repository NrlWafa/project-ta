<?php

use App\Http\Controllers\SendEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\PelamarController;
use App\Http\Controllers\admin\PenggunaController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\landingpage\BlogController;
use App\Http\Controllers\landingpage\GaleriController;
use App\Http\Controllers\landingpage\KontakController;
use App\Http\Controllers\landingpage\BerandaController;
use App\Http\Controllers\landingpage\LayananController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\landingpage\FormasiPekerjaanController;
use App\Http\Controllers\landingpage\ProfilPerusahaanController;

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


// Login dan SignIn
Route::get('Login', [LoginController::class,"index"] );
Route::get('SignIn', [LoginController::class,"signin"] );
Route::post('SignIn', [LoginController::class,"signinProses"] );


// Admin
Route::get('Profil-Admin', [DashboardController::class,"profile"] );
Route::get('admin', [DashboardController::class,"index"] );
Route::get('Dashboard_Detail_Pelamar', [DashboardController::class,"dashboarddetailpelamar"] );

Route::get('Pengguna', [PenggunaController::class,"index"] );

Route::get('Daftar_Pelamar', [PelamarController::class,"index"] );
Route::get('Detail_Data_Pelamar', [PelamarController::class,"pelamar"] );
Route::get('hapus-data/{id}', [PelamarController::class,"hapus_data"] );


// User
Route::get('Profil-User', [UserController::class,"profil"] );
Route::get('User', [UserController::class,"index"] );
Route::get('Form_Lamaran', [UserController::class,"pendaftar"] );
Route::post('store', [UserController::class,"store"] );


//Test Sending Email
Route::get('send-email', [SendEmail::class, "index"]);

//Verifikasi Email


Route::get('/login', function () {
    return 'ini halaman login';
})->name('login');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('profil.index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('profil.index', function () {
    return 'ini halaman profil, penanda user sudah login dan terverifikasi.';
})->middleware(['auth', 'verified']);


