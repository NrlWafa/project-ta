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

        $operator = DB::table('Operator')

            ->join(
                'pelamar',
                'Operator.id_pelamar',
                '=',
                'pelamar.id'
            )
            ->select(
                'Operator.id',
                'Operator.id_pelamar',
                'Operator.pend_formal',
                'Operator.pend_nonformal',
                'Operator.usia',
                'Operator.lama_kerja',
                'Operator.komp',
                'Operator.jarak_c1',
                'Operator.jarak_c2',
                'Operator.iterasi',
                'pelamar.id_user',
                'pelamar.jabatan_lamaran',
            )
            ->get();

        return view("admin.perhitungan.operator", compact('operator'),  [
            "title" => "P. Operator"
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
