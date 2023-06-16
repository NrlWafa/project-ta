<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelamarController extends Controller
{
    public function index()
    {
        $pelamar = Pelamar::all();

        return view("admin.pelamar.index",compact('pelamar'),  [
            "title" => "Data Pelamar"
        ]);
    }

    public function pelamar()
    {
        $pelamar = Pelamar::all();
    
        return view("admin.pelamar.detail",compact('pelamar'), [
            "title" => "Data Pelamar"
        ]);
    }

     public function hapus_data($id)
    {
        DB::table('Pelamar')->where('id', $id)->delete();
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
