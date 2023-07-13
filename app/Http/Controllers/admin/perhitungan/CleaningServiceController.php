<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\CleaningService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CleaningServiceController extends Controller
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
        $nilaiC1 = array("1", "1", "1", "2"); //manual di excel
        $nilaiC2 = array("5", "2", "2", "5"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;

        $cleaningservice = CleaningService::query()
            ->join(
                'pelamar',
                'cleaningservice.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'cleaningservice.id',
                'cleaningservice.id_pelamar',
                'cleaningservice.pend_formal',
                'cleaningservice.pend_nonformal',
                'cleaningservice.usia',
                'cleaningservice.lama_kerja',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.cleaningservice", compact(
            'cleaningservice',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Cleaning Service",

        ]);
    }

    public function hasil_akhir_CS()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $i = 1;
        $j = 0;
        $k = 0;
        $iterasi = 1;
        $nilaiC1 = array("1", "1", "1", "2"); //manual di excel
        $nilaiC2 = array("5", "2", "2", "5"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;
        $status = []; // Array untuk menyimpan status setiap iterasi

        $cleaningservice = CleaningService::query()
            ->join(
                'pelamar',
                'cleaningservice.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'cleaningservice.id',
                'cleaningservice.id_pelamar',
                'cleaningservice.pend_formal',
                'cleaningservice.pend_nonformal',
                'cleaningservice.usia',
                'cleaningservice.lama_kerja',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.hasil_akhir.hasil_akhir_cs", compact(
            'cleaningservice',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Cleaning Service",

        ]);
    }




    public function hapus_data_cs($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Hapus data teknisi berdasarkan ID
        CleaningService::destroy($id);

        return redirect('Data_CleaningService');
    }
}
