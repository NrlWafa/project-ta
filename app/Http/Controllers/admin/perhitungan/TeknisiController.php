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

        $i = 1;
        $j = 0;
        $k = 0;
        $iterasi = 1;
        $nilaiC1 = array("1", "1", "1", "2", "1"); //manual di excel
        $nilaiC2 = array("4", "2", "3", "5", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;

        $teknisi = Teknisi::query()
            ->join(
                'pelamar',
                'teknisi.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'teknisi.id',
                'teknisi.id_pelamar',
                'teknisi.pend_formal',
                'teknisi.pend_nonformal',
                'teknisi.usia',
                'teknisi.lama_kerja',
                'teknisi.komp',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.teknisi", compact(
            'teknisi',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Teknisi",

        ]);
    }

    public function hasil_akhir_teknisi()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $i = 1;
        $j = 0;
        $k = 0;
        $iterasi = 1;
        $nilaiC1 = array("1", "1", "1", "2", "1"); //manual di excel
        $nilaiC2 = array("4", "2", "3", "5", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;

        $teknisi = Teknisi::query()
            ->join(
                'pelamar',
                'teknisi.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'teknisi.id',
                'teknisi.id_pelamar',
                'teknisi.pend_formal',
                'teknisi.pend_nonformal',
                'teknisi.usia',
                'teknisi.lama_kerja',
                'teknisi.komp',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.hasil_akhir.hasil_akhir_teknisi", compact(
            'teknisi',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Teknisi",

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
