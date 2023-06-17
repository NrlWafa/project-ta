<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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

        $profil = Profil::detail_profil(session('auth')->id);
        return view('user.profil.index', compact('profil'), [
            "title" => "Profile"
        ]);
    }
}
