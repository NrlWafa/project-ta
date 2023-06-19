<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilUserController extends Controller
{
    public function user_profil()
    {
        // Cek hak akses jika dia bukan User, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 2) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $profil = Profil::detail_profil(auth()->user()->id);
        $pelamar = Pelamar::where('id_user', auth()->user()->id)->first();
        return view('user.profil.index', compact('profil', 'pelamar'), [
            "title" => "Profile"
        ]);
    }
}
