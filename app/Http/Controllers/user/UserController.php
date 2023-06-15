<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function profil()
    {
        return view("user.profil.index",
         [
            "title" => "Profile"
        ]);
    }


     public function index()
    {
        
        return view("user.dashboard.index", [
            "title" => "User"
        ]);
    }

     public function pendaftar()
    {
        
        return view("user.dashboard.form-lamaran", [
            "title" => "User"
        ]);
    }

    public function store(Request $req)
    {
    
        Pelamar::create($req->except(['_token','submit']));
        return redirect('User');
    }
 
    
}
