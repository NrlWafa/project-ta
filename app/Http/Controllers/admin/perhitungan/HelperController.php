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

        $i = 1;
        $j = 0;
        $k = 0;
        $iterasi = 1;
        $nilaiC1 = array("1", "1", "1", "2", "1"); //manual di excel
        $nilaiC2 = array("4", "2", "2", "5", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;

        $helper = Helper::query()
            ->join(
                'pelamar',
                'helper.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'helper.id',
                'helper.id_pelamar',
                'helper.pend_formal',
                'helper.pend_nonformal',
                'helper.usia',
                'helper.lama_kerja',
                'helper.komp',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.helper", compact(
            'helper',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Helper",

        ]);
    }

    public function hasil_akhir_helper()
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
        $nilaiC2 = array("4", "2", "2", "5", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;
        $status = []; // Array untuk menyimpan status setiap iterasi

        while (($thresholdC1_New != $thresholdC1) && (($thresholdC2_New != $thresholdC2))) {
            $helper = Helper::query()
                ->join(
                    'pelamar',
                    'helper.id_pelamar',
                    '=',
                    'pelamar.id'
                )
                ->select(
                    'helper.id',
                    'helper.id_pelamar',
                    'helper.pend_formal',
                    'helper.pend_nonformal',
                    'helper.usia',
                    'helper.lama_kerja',
                    'helper.komp',
                    'pelamar.id_user',
                    'pelamar.jabatan_lamaran',
                    'pelamar.nama_lengkap'
                )
                ->get();

            $j = 0;
            $k = 0;


            if ($iterasi != 1) {
                $thresholdC1 = $thresholdC1_New;
            }

            // mendefinisikan variabel-variabel ini dengan menginisialisasi array kosong sebelum penggunaannya
            $pend_formal_C2 = [];
            $pend_nonformal_C2 = [];
            $usia_C2 = [];
            $lama_kerja_C2 = [];
            $komp_C2 = [];

            // kondisi untuk memeriksa apakah array tersebut kosong atau tidak.
            // Jika array kosong, maka berikan nilai default sebelum melakukan perhitungan
            // akan ada nilai default [0] yang diberikan jika array tersebut kosong, sehingga pembagian tidak akan terjadi dengan nol.
            if (empty($pend_formal_C1)) {
                $pend_formal_C1 = [0];
            }
            if (empty($pend_nonformal_C1)) {
                $pend_nonformal_C1 = [0];
            }
            if (empty($usia_C1)) {
                $usia_C1 = [0];
            }
            if (empty($lama_kerja_C1)) {
                $lama_kerja_C1 = [0];
            }
            if (empty($komp_C1)) {
                $komp_C1 = [0];
            }

            if (empty($pend_formal_C2)) {
                $pend_formal_C2 = [0];
            }
            if (empty($pend_nonformal_C2)) {
                $pend_nonformal_C2 = [0];
            }
            if (empty($usia_C2)) {
                $usia_C2 = [0];
            }
            if (empty($lama_kerja_C2)) {
                $lama_kerja_C2 = [0];
            }
            if (empty($komp_C2)) {
                $komp_C2 = [0];
            }

            foreach ($helper as $row) {
                $jarakC1 = pow($row->pend_formal - $nilaiC1[0], 2) +
                    pow($row->pend_nonformal - $nilaiC1[1], 2) +
                    pow($row->usia - $nilaiC1[2], 2) +
                    pow($row->lama_kerja - $nilaiC1[3], 2) +
                    pow($row->komp - $nilaiC1[4], 2);

                $jarakC2 = pow($row->pend_formal - $nilaiC2[0], 2) +
                    pow($row->pend_nonformal - $nilaiC2[1], 2) +
                    pow($row->usia - $nilaiC2[2], 2) +
                    pow($row->lama_kerja - $nilaiC2[3], 2) +
                    pow($row->komp - $nilaiC2[4], 2);


                if (round(sqrt($jarakC1), 3) <= round(sqrt($jarakC2), 3)) {
                    $pend_formal_C1[$j] = $row->pend_formal;
                    $pend_nonformal_C1[$j] = $row->pend_nonformal;
                    $usia_C1[$j] = $row->usia;
                    $lama_kerja_C1[$j] = $row->lama_kerja;
                    $komp_C1[$j] = $row->komp;
                    $status[$i] = round(sqrt($jarakC1), 3);
                    $keputusan = 'Tidak Memenuhi Kualifikasi';
                    $j++;
                } else {
                    $pend_formal_C2[$k] = $row->pend_formal;
                    $pend_nonformal_C2[$k] = $row->pend_nonformal;
                    $usia_C2[$k] = $row->usia;
                    $lama_kerja_C2[$k] = $row->lama_kerja;
                    $komp_C2[$k] = $row->komp;
                    $status[$i] = round(sqrt($jarakC2), 3);
                    $keputusan = 'Memenuhi Kualifikasi';
                    $j++;
                }
            }

            $iterasi = $iterasi + 1;
            $pend_formal_C1_bobot = round(array_sum($pend_formal_C1) / count($pend_formal_C1), 1);
            $pend_nonformal_C1_bobot = round(array_sum($pend_nonformal_C1) / count($pend_nonformal_C1), 1);
            $usia_C1_bobot = round(array_sum($usia_C1) / count($usia_C1), 1);
            $lama_kerja_C1_bobot = round(array_sum($lama_kerja_C1) / count($lama_kerja_C1), 1);
            $komp_C1_bobot = round(array_sum($komp_C1) / count($komp_C1), 1);
            $nilaiC1 = array(
                $pend_formal_C1_bobot,
                $pend_nonformal_C1_bobot,
                $usia_C1_bobot,
                $lama_kerja_C1_bobot,
                $komp_C1_bobot
            );
            $thresholdC1_New = round(($pend_formal_C1_bobot +
                $pend_nonformal_C1_bobot +
                $usia_C1_bobot +
                $lama_kerja_C1_bobot +
                $komp_C1_bobot) / 5, 1);
            $pend_formal_C2_bobot = round(array_sum($pend_formal_C2) / count($pend_formal_C2), 1);
            $pend_nonformal_C2_bobot = round(array_sum($pend_nonformal_C2) / count($pend_nonformal_C2), 1);
            $usia_C2_bobot = round(array_sum($usia_C2) / count($usia_C2), 1);
            $lama_kerja_C2_bobot = round(array_sum($lama_kerja_C2) / count($lama_kerja_C2), 1);
            $komp_C2_bobot = round(array_sum($komp_C2) / count($komp_C2), 1);
            $nilaiC2 = array(
                $pend_formal_C2_bobot,
                $pend_nonformal_C2_bobot,
                $usia_C2_bobot,
                $lama_kerja_C2_bobot,
                $komp_C2_bobot
            );
            $thresholdC2_New = round(($pend_formal_C2_bobot +
                $pend_nonformal_C2_bobot +
                $usia_C2_bobot +
                $lama_kerja_C2_bobot +
                $komp_C2_bobot) / 5, 1); // Sesuaikan dengan jumlah kualifikasi yg ada di excel
            if ($iterasi == 6) {
                // coding untuk mengatasi iterasi yang terlalu panjang
                $thresholdC1 = 1;
                $thresholdC1_New = 1;
                $thresholdC2 = 1;
                $thresholdC2_New = 1;
                //unset($pend_formal_C1);
            }

            $helper = DB::table('helper')
                ->join('pelamar', 'helper.id_pelamar', '=', 'pelamar.id')
                ->select(
                    'helper.id',
                    'helper.id_pelamar',
                    'helper.pend_formal',
                    'helper.pend_nonformal',
                    'helper.usia',
                    'helper.lama_kerja',
                    'helper.komp',
                    'pelamar.id_user',
                    'pelamar.jabatan_lamaran',
                    'pelamar.nama_lengkap'
                )
                ->get();

            return view("admin.perhitungan.hasil_akhir.hasil_akhir_helper", compact('helper', 'nilaiC1', 'nilaiC2', 'status', 'iterasi'), [
                "title" => "P. Helper"
            ]);
        }
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
