<?php

use App\Http\Controllers\admin\HomeAdminController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\landingpage\BerandaController;
use App\Http\Controllers\landingpage\BlogController;
use App\Http\Controllers\landingpage\FormasiPekerjaanController;
use App\Http\Controllers\landingpage\GaleriController;
use App\Http\Controllers\landingpage\KontakController;
use App\Http\Controllers\landingpage\LayananController;
use App\Http\Controllers\landingpage\ProfilPerusahaanController;
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

// Landingpage
Route::get('/', [BerandaController::class,"index"] );
Route::get('Layanan', [LayananController::class,"index"] );
Route::get('Blog', [BlogController::class,"index"] );
Route::get('profil-perusahaan', [ProfilPerusahaanController::class,"index"] );
Route::get('formasi-pekerjaan', [FormasiPekerjaanController::class,"index"] );
Route::get('Galeri', [GaleriController::class,"index"] );
Route::get('Kontak', [KontakController::class,"index"] );



// Admin
Route::get('admin', [HomeAdminController::class,"index"] );
Route::get('Login', [LoginController::class,"index"] );




