<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelperController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $helper = DB::table('Helper')
            ->join(
                'pelamar',
                'Helper.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'Helper.id',
                'Helper.id_pelamar',
                'Helper.pend_formal',
                'Helper.pend_nonformal',
                'Helper.usia',
                'Helper.lama_kerja',
                'Helper.komp',
                'Helper.jarak_c1',
                'Helper.jarak_c2',
                'Helper.iterasi',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
            )
            ->get();

        return view("admin.perhitungan.helper", compact('helper'),  [
            "title" => "P. Helper"
        ]);
    }

    public function hapus_data_helper($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Hapus data teknisi berdasarkan ID
        Helper::destroy($id);

        return redirect('Data_Helper');
    }
}
