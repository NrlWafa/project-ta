<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $admin = DB::table('Admin')

            ->join('pelamar', 'Admin.id_pelamar', '=', 'pelamar.id')
            ->select(
                'Admin.id',
                'Admin.id_pelamar',
                'Admin.pend_formal',
                'Admin.pend_nonformal',
                'Admin.usia',
                'Admin.lama_kerja',
                'Admin.komp',
                'Admin.jarak_c1',
                'Admin.jarak_c2',
                'Admin.iterasi',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
            )
            ->get();

        return view("admin.perhitungan.admin", compact('admin'),  [
            "title" => "P. Admin"
        ]);
    }

    public function hapus_data_admin($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Hapus data teknisi berdasarkan ID
        Admin::destroy($id);

        return redirect('Data_Admin');
    }
}
