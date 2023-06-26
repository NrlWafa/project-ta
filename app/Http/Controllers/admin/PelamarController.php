<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use Faker\Core\File;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Storage;

class PelamarController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $pelamar = Pelamar::all();

        return view("admin.pelamar.index", compact('pelamar'),  [
            "title" => "Data Pelamar"
        ]);
    }

    public function pelamar($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $pelamar = Pelamar::find($id);
        // dd($pelamar);

        return view("admin.pelamar.detail", compact('pelamar'), [
            "title" => "Data Pelamar"
        ]);
    }

    public function store(Request $request)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $validated = $request->validate([
            'id_user' => 'unique:pelamar'
        ]);
    }

    public function hapus_data($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $pelamar = Pelamar::find($id);
        FacadesFile::delete(public_path('foto_kk/' . $pelamar->foto_kk));
        FacadesFile::delete(public_path('foto_kta/' . $pelamar->foto_kta));
        FacadesFile::delete(public_path('foto_npwp/' . $pelamar->foto_npwp));
        FacadesFile::delete(public_path('pas_foto/' . $pelamar->pas_foto));
        FacadesFile::delete(public_path('foto_ktp/' . $pelamar->foto_ktp));
        $pelamar->delete();
        return redirect('Daftar_Pelamar');
    }

    public function validasi_form()
    {

        // Mendefinisikan variabel yang akan digunakan untuk menyimpan pesan error
        $errors = [];

        // Memeriksa apakah form telah disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Memeriksa apakah field 'nama_lengkap' kosong
            if (empty($_POST['nama_lengkap'])) {
                $errors[] = 'Nama Lengkap tidak boleh kosong.';
            }

            // Memeriksa apakah field 'nama_panggilan' kosong
            if (empty($_POST['nama_panggilan'])) {
                $errors[] = 'Nama Panggilan tidak boleh kosong.';
            }

            // Memeriksa apakah terdapat error
            if (count($errors) === 0) {

                // Proses penyimpanan data atau tindakan lain yang diperlukan
                // jika validasi sukses
                echo "Data telah berhasil disimpan.";
                exit; // Menghentikan eksekusi skrip setelah berhasil disimpan
            }
        }
    }
}
