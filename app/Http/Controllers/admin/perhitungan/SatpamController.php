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

        $i = 1;
        $j = 0;
        $k = 0;
        $iterasi = 1;
        $nilaiC1 = array("1", "1", "1", "2", "2", "1"); //manual di excel
        $nilaiC2 = array("5", "2", "3", "5", "4", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;

        $satpam = Satpam::query()
            ->join(
                'pelamar',
                'satpam.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'satpam.id',
                'satpam.id_pelamar',
                'satpam.pend_formal',
                'satpam.pend_nonformal',
                'satpam.usia',
                'satpam.lama_kerja',
                'satpam.satpam',
                'satpam.tinggi_badan',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
                'pelamar.nama_lengkap'
            )
            ->get();

        return view("admin.perhitungan.satpam", compact(
            'satpam',
            'nilaiC1',
            'nilaiC2',
            'iterasi',
            'thresholdC1',
            'thresholdC2',
            'thresholdC1_New',
            'thresholdC2_New',
            'i'
        ),  [
            "title" => "P. Satpam",

        ]);
    }

    public function hasil_akhir_satpam()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $i = 1;
        $j = 0;
        $k = 0;
        $iterasi = 1;
        $nilaiC1 = array("1", "1", "1", "2", "2", "1"); //manual di excel
        $nilaiC2 = array("5", "2", "3", "5", "4", "2"); //manual di excel
        $thresholdC1 = round(array_sum($nilaiC1) / count($nilaiC1), 1);
        $thresholdC2 = round(array_sum($nilaiC2) / count($nilaiC2), 1);
        $thresholdC1_New = 0;
        $thresholdC2_New = 0;
        $status = []; // Array untuk menyimpan status setiap iterasi

        while (($thresholdC1_New != $thresholdC1) && (($thresholdC2_New != $thresholdC2))) {
            $satpam = Satpam::query()
                ->join(
                    'pelamar',
                    'satpam.id_pelamar',
                    '=',
                    'pelamar.id'
                )
                ->select(
                    'satpam.id',
                    'satpam.id_pelamar',
                    'satpam.pend_formal',
                    'satpam.pend_nonformal',
                    'satpam.usia',
                    'satpam.lama_kerja',
                    'satpam.satpam',
                    'satpam.tinggi_badan',
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

            foreach ($satpam as $row) {
                $jarakC1 = pow($row->pend_formal - $nilaiC1[0], 2) +
                    pow($row->pend_nonformal - $nilaiC1[1], 2) +
                    pow($row->usia - $nilaiC1[2], 2) +
                    pow($row->lama_kerja - $nilaiC1[3], 2) +
                    pow($row->satpam - $nilaiC1[4], 2) +
                    pow($row->tinggi_badan - $nilaiC1[5], 2);

                $jarakC2 = pow($row->pend_formal - $nilaiC2[0], 2) +
                    pow($row->pend_nonformal - $nilaiC2[1], 2) +
                    pow($row->usia - $nilaiC2[2], 2) +
                    pow($row->lama_kerja - $nilaiC2[3], 2) +
                    pow($row->satpam - $nilaiC2[4], 2) +
                    pow($row->tinggi_badan - $nilaiC2[5], 2);


                if (round(sqrt($jarakC1), 3) <= round(sqrt($jarakC2), 3)) {
                    $pend_formal_C1[$j] = $row->pend_formal;
                    $pend_nonformal_C1[$j] = $row->pend_nonformal;
                    $usia_C1[$j] = $row->usia;
                    $lama_kerja_C1[$j] = $row->lama_kerja;
                    $satpam_C1[$j] = $row->satpam;
                    $tinggi_badan_C1[$j] = $row->tinggi_badan;
                    $status[$i] = round(sqrt($jarakC1), 3);
                    $keputusan = 'Tidak Memenuhi Kualifikasi';
                    $j++;
                } else {
                    $pend_formal_C2[$k] = $row->pend_formal;
                    $pend_nonformal_C2[$k] = $row->pend_nonformal;
                    $usia_C2[$k] = $row->usia;
                    $lama_kerja_C2[$k] = $row->lama_kerja;
                    $satpam_C2[$k] = $row->satpam;
                    $tinggi_badan_C2[$k] = $row->tinggi_badan;
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
            $satpam_C1_bobot = round(array_sum($satpam_C1) / count($satpam_C1), 1);
            $tinggi_badan_C1_bobot = round(array_sum($tinggi_badan_C1) / count($tinggi_badan_C1), 1);
            $nilaiC1 = array(
                $pend_formal_C1_bobot,
                $pend_nonformal_C1_bobot,
                $usia_C1_bobot,
                $lama_kerja_C1_bobot,
                $satpam_C1_bobot,
                $tinggi_badan_C1_bobot
            );
            $thresholdC1_New = round(($pend_formal_C1_bobot +
                $pend_nonformal_C1_bobot +
                $usia_C1_bobot +
                $lama_kerja_C1_bobot +
                $satpam_C1_bobot +
                $tinggi_badan_C1_bobot) / 6, 1);
            $pend_formal_C2_bobot = round(array_sum($pend_formal_C2) / count($pend_formal_C2), 1);
            $pend_nonformal_C2_bobot = round(array_sum($pend_nonformal_C2) / count($pend_nonformal_C2), 1);
            $usia_C2_bobot = round(array_sum($usia_C2) / count($usia_C2), 1);
            $lama_kerja_C2_bobot = round(array_sum($lama_kerja_C2) / count($lama_kerja_C2), 1);
            $satpam_C2_bobot = round(array_sum($satpam_C2) / count($satpam_C2), 1);
            $tinggi_badan_C2_bobot = round(array_sum($tinggi_badan_C2) / count($tinggi_badan_C2), 1);
            $nilaiC2 = array(
                $pend_formal_C2_bobot,
                $pend_nonformal_C2_bobot,
                $usia_C2_bobot,
                $lama_kerja_C2_bobot,
                $satpam_C2_bobot,
                $tinggi_badan_C2_bobot
            );
            $thresholdC2_New = round(($pend_formal_C2_bobot +
                $pend_nonformal_C2_bobot +
                $usia_C2_bobot +
                $lama_kerja_C2_bobot +
                $satpam_C2_bobot +
                $tinggi_badan_C2_bobot) / 6, 1); // Sesuaikan dengan jumlah kualifikasi yg ada di excel
            if ($iterasi == 6) {
                // coding untuk mengatasi iterasi yang terlalu panjang
                $thresholdC1 = 1;
                $thresholdC1_New = 1;
                $thresholdC2 = 1;
                $thresholdC2_New = 1;
                //unset($pend_formal_C1);
            }


            $satpam = DB::table('Satpam')
                ->join('pelamar', 'Satpam.id_pelamar', '=', 'pelamar.id')
                ->select(
                    'Satpam.id',
                    'Satpam.id_pelamar',
                    'Satpam.pend_formal',
                    'Satpam.pend_nonformal',
                    'Satpam.usia',
                    'Satpam.lama_kerja',
                    'Satpam.satpam',
                    'Satpam.tinggi_badan',
                    'pelamar.id_user',
                    'pelamar.jabatan_lamaran',
                    'pelamar.nama_lengkap'
                )
                ->get();



            return view("admin.perhitungan.hasil_akhir_satpam", compact('satpam', 'nilaiC1', 'nilaiC2', 'status', 'iterasi'), [
                "title" => "P. Satpam"
            ]);
        }
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
