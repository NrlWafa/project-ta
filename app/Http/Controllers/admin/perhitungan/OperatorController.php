<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
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
        $nilaiC2 = array("5", "2", "2", "5", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;

        $operator = Operator::query()
            ->join(
                'pelamar',
                'operator.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'operator.id',
                'operator.id_pelamar',
                'operator.pend_formal',
                'operator.pend_nonformal',
                'operator.usia',
                'operator.lama_kerja',
                'operator.komp',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.operator", compact(
            'operator',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Operator",

        ]);
    }

    public function hasil_akhir_operator()
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
        $nilaiC2 = array("5", "2", "2", "5", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;

        $operator = Operator::query()
            ->join(
                'pelamar',
                'operator.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'operator.id',
                'operator.id_pelamar',
                'operator.pend_formal',
                'operator.pend_nonformal',
                'operator.usia',
                'operator.lama_kerja',
                'operator.komp',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.hasil_akhir.hasil_akhir_operator", compact(
            'operator',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Operator",

        ]);
    }

    public function hapus_data_operator($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Hapus data teknisi berdasarkan ID
        Operator::destroy($id);

        return redirect('Data_Operator');
    }
}
