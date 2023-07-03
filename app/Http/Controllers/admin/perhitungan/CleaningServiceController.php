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

        $cleaningservice = DB::table('CleaningService')

            ->join('pelamar', 'CleaningService.id_pelamar', '=', 'pelamar.id')
            ->select(
                'CleaningService.id',
                'CleaningService.id_pelamar',
                'CleaningService.pend_formal',
                'CleaningService.pend_nonformal',
                'CleaningService.usia',
                'CleaningService.lama_kerja',
                'CleaningService.jarak_c1',
                'CleaningService.jarak_c2',
                'CleaningService.iterasi',
                'pelamar.id_user',
                // 'pelamar.nama_lengkap',
            )
            ->get();

        return view("admin.perhitungan.cleaningservice", compact('cleaningservice'),  [
            "title" => "P. Cleaning Service"
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
