<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    
    public function profil(){
        $profil = Profil::detail_profil(session('auth')->id);
        return view('admin.profil.index', compact('profil'), [
            "title" => "Profile"
        ]);
    }
}
