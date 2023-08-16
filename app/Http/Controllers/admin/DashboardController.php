<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Keluar;
use App\Models\Pelamar;
use App\Models\Surat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function profil()
    {
        return view("admin.profil.index", [
            "title" => "Profile"
        ]);
    }


    public function index()
    {
        $surat_masuk_count = Surat::where('id_jenis_surat', 1)->count();
        $surat_keluar_count = Surat::where('id_jenis_surat', 2)->count();
        $data = [
            'title' => 'Dashboard',
            'surat_masuk_count' => $surat_masuk_count,
            'surat_keluar_count' => $surat_keluar_count,
        ];
        return view('admin.dashboard.index', $data);
    }
}
