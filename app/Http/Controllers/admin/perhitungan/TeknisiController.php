<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeknisiController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $teknisi = DB::table('Teknisi')
            ->join(
                'pelamar',
                'Teknisi.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'Teknisi.id',
                'Teknisi.id_pelamar',
                'Teknisi.pend_formal',
                'Teknisi.pend_nonformal',
                'Teknisi.usia',
                'Teknisi.lama_kerja',
                'Teknisi.komp',
                'Teknisi.jarak_c1',
                'Teknisi.jarak_c2',
                'Teknisi.iterasi',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
            )
            ->get();

        return view("admin.perhitungan.teknisi", compact('teknisi'),  [
            "title" => "P. Teknisi"
        ]);
    }

    public function hapus_data_teknisi($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Hapus data teknisi berdasarkan ID
        Teknisi::destroy($id);

        return redirect('Data_Teknisi');
    }
}
