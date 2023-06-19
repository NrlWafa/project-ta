<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{


    public function profil()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $profil = Profil::detail_profil(auth()->user()->id);
        return view('admin.profil.index', compact('profil'), [
            "title" => "Profile"
        ]);
    }
}
