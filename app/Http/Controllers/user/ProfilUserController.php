<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilUserController extends Controller
{
    public function user_profil(){
        $profil = Profil::detail_profil(session('auth')->id);
        return view('user.profil.index', compact('profil'), [
            "title" => "Profile"
        ]);
    }
}
