<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\CleaningService;
use Illuminate\Http\Request;

class CleaningServiceController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $cleaningservice = CleaningService::all();

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
