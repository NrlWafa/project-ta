<?php

use App\Http\Controllers\SendEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\admin\PelamarController;
use App\Http\Controllers\admin\PenggunaController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\perhitungan\AdminController;
use App\Http\Controllers\admin\perhitungan\CleaningServicController;
use App\Http\Controllers\admin\perhitungan\CleaningServiceController;
use App\Http\Controllers\admin\perhitungan\DriverController;
use App\Http\Controllers\admin\perhitungan\HelperController;
use App\Http\Controllers\admin\perhitungan\OperatorController;
use App\Http\Controllers\admin\perhitungan\SatpamController as PerhitunganSatpamController;
use App\Http\Controllers\admin\perhitungan\TeknisiController;
use App\Http\Controllers\user\ProfilUserController;
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
Route::get('/', [BerandaController::class, "index"]);
Route::get('Layanan', [LayananController::class, "index"]);


// LandingPage Blog
Route::get('Blog', [BlogController::class, "index"]);
Route::get('Pelatihan1', [BlogController::class, "pelatihan1"]);
Route::get('Pelatihan2', [BlogController::class, "pelatihan2"]);
Route::get('Pelatihan3', [BlogController::class, "pelatihan3"]);
Route::get('Rekrutmen1', [BlogController::class, "rekrutmen1"]);
Route::get('Rekrutmen2', [BlogController::class, "rekrutmen2"]);
Route::get('Rekrutmen3', [BlogController::class, "rekrutmen3"]);

// LandingPage
Route::get('profil-perusahaan', [ProfilPerusahaanController::class, "index"]);
Route::get('formasi-pekerjaan', [FormasiPekerjaanController::class, "index"]);
Route::get('Galeri', [GaleriController::class, "index"]);
Route::get('Kontak', [KontakController::class, "index"]);


// Login dan SignIn
Route::get('Login', [LoginController::class, "index"])->name('login');
Route::post('user/login', [LoginController::class, "login"]);


// Sign In
Route::get('SignIn', [LoginController::class, "signin"]);
Route::post('user/create', [LoginController::class, "create"]);

Route::post('SignIn', [LoginController::class, "create"]);
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Route untuk redirect link verifikasi
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();


    // Setelah klik link  verifikasi akan diarahkan ke dashboard User
    return redirect('Login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('User', function () {
    return 'Akun Anda telah terverifikasi';
})->middleware(['auth', 'verified']);



// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, "verify"])
//     ->name('verification.verify');


//Test Sending Email
Route::get('send-email', [SendEmail::class, "index"]);


// Logout
Route::get('Logout', [LoginController::class, "logout"]);

Route::middleware('auth')->group(function () {
    // Admin
    Route::get('Profil-Admin', [ProfilController::class, "profil"]);
    Route::get('admin', [DashboardController::class, "index"]);
    Route::get('Dashboard_Detail_Pelamar/{id}', [DashboardController::class, "dashboarddetailpelamar"]);

    // Pengguna
    Route::get('Pengguna', [PenggunaController::class, "index"]);
    Route::get('Data_Pengguna/{id}', [PenggunaController::class, "hapus_data_pengguna"]);


    // Pelamar
    Route::get('Daftar_Pelamar', [PelamarController::class, "index"]);
    Route::get('Detail_Data_Pelamar/{id}', [PelamarController::class, "pelamar"]);
    Route::get('Daftar_Pelamar/{id}', [PelamarController::class, "hapus_data"]);


    // Data Perhitungan 
    Route::get('Data_Admin', [AdminController::class, "index"]);
    Route::get('Data_Admin/{id}', [AdminController::class, "hapus_data_admin"]);
    Route::get('Data_Akhir_Admin', [AdminController::class, "hasil_akhir_admin"]);

    Route::get('Data_CleaningService', [CleaningServiceController::class, "index"]);
    Route::get('Data_CleaningService/{id}', [CleaningServiceController::class, "hapus_data_cs"]);
    Route::get('Data_Akhir_CS', [CleaningServiceController::class, "hasil_akhir_CS"]);

    Route::get('Data_Driver', [DriverController::class, "index"]);
    Route::get('Data_Driver/{id}', [DriverController::class, "hapus_data_driver"]);
    Route::get('Data_Akhir_Driver', [DriverController::class, "hasil_akhir_driver"]);

    Route::get('Data_Helper', [HelperController::class, "index"]);
    Route::get('Data_Helper/{id}', [HelperController::class, "hapus_data_helper"]);
    Route::get('Data_Akhir_Helper', [HelperController::class, "hasil_akhir_helper"]);

    Route::get('Data_Operator', [OperatorController::class, "index"]);
    Route::get('Data_Operator/{id}', [OperatorController::class, "hapus_data_operator"]);
    Route::get('Data_Akhir_Operator', [OperatorController::class, "hasil_akhir_operator"]);

    Route::get('Data_Satpam', [PerhitunganSatpamController::class, "index"]);
    Route::get('Data_Satpam/{id}', [PerhitunganSatpamController::class, "hapus_data_satpam"]);
    Route::get('Data_Akhir_Satpam', [PerhitunganSatpamController::class, "hasil_akhir_satpam"]);

    Route::get('Data_Teknisi', [TeknisiController::class, "index"]);
    Route::get('Data_Teknisi/{id}', [TeknisiController::class, "hapus_data_teknisi"]);
    Route::get('Data_Akhir_Teknisi', [TeknisiController::class, "hasil_akhir_teknisi"]);
});


Route::middleware(['auth', 'verified'])->group(function () {
    // User
    Route::get('Profil-User', [ProfilUserController::class, "user_profil"]);
    Route::get('User', [UserController::class, "index"]);
    Route::get('Form_Lamaran', [UserController::class, "pendaftar"]);
    Route::post('user/store', [UserController::class, "store"]);
});
