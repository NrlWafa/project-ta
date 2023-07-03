<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\Satpam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatpamController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $satpam = DB::table('Satpam')

            ->join(
                'pelamar',
                'Satpam.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'Satpam.id',
                'Satpam.id_pelamar',
                'Satpam.pend_formal',
                'Satpam.pend_nonformal',
                'Satpam.usia',
                'Satpam.lama_kerja',
                'Satpam.satpam',
                'Satpam.tinggi_badan',
                'Satpam.jarak_c1',
                'Satpam.jarak_c2',
                'Satpam.iterasi',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'


            )
            ->get();

        return view("admin.perhitungan.satpam", compact('satpam'),  [
            "title" => "P. Satpam"
        ]);
    }

    public function hapus_data_satpam($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Hapus data teknisi berdasarkan ID
        Satpam::destroy($id);

        return redirect('Data_Satpam');
    }
}
