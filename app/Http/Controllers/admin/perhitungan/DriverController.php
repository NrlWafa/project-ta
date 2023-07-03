<?php

namespace App\Http\Controllers\admin\perhitungan;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $driver = DB::table('Driver')

            ->join(
                'pelamar',
                'Driver.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'Driver.id',
                'Driver.id_pelamar',
                'Driver.pend_formal',
                'Driver.pend_nonformal',
                'Driver.usia',
                'Driver.lama_kerja',
                'Driver.sim',
                'Driver.jarak_c1',
                'Driver.jarak_c2',
                'Driver.iterasi',
                'pelamar.id_user'
            )
            ->get();

        return view("admin.perhitungan.driver", compact('driver'),  [
            "title" => "P. Driver"
        ]);
    }

    public function hapus_data_driver($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Hapus data teknisi berdasarkan ID
        Driver::destroy($id);

        return redirect('Data_Driver');
    }
}
