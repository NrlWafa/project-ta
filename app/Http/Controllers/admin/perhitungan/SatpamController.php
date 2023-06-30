<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\Satpam;
use Illuminate\Http\Request;

class SatpamController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $satpam = Satpam::all();

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
