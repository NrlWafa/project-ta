<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelamarController extends Controller
{
    public function index()
    {
        $pelamar = Pelamar::all();

        return view("admin.pelamar.index",compact('pelamar'),  [
            "title" => "Data Pelamar"
        ]);
    }

    public function pelamar()
    {
        $pelamar = Pelamar::all();
    
        return view("admin.pelamar.detail",compact('pelamar'), [
            "title" => "Data Pelamar"
        ]);
    }

     public function hapus_data($id)
    {
        DB::table('Pelamar')->where('id', $id)->delete();
        return redirect('Daftar_Pelamar');
    }

  
}
