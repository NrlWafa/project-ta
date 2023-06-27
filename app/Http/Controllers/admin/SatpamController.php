<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SatpamController extends Controller
{
    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 2) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $satpam = Satpam::all();

        return view("admin.satpam.index", compact('satpam'),  [
            "title" => "Data Satpam"
        ]);
    }
}
