<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function profil()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        return view("admin.profil.index", [
            "title" => "Profile"
        ]);
    }

    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $pelamar = Pelamar::all();


        return view("admin.dashboard.index", compact('pelamar'), [
            "title" => "Dashboard"
        ]);
    }

    public function dashboarddetailpelamar($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }
        $pelamar = Pelamar::find($id);

        return view("admin.dashboard.detail-pelamar", compact('pelamar'), [
            "title" => "Dashboard"
        ]);
    }
}
