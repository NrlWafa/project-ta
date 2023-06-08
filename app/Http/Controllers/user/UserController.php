<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        return view("user.dashboard.index", [
            "title" => "Dashboard-User"
        ]);
    }

     public function pendaftar()
    {
        return view("user.dashboard.form-lamaran", [
            "title" => "Dashboard-User"
        ]);
    }

     public function profil()
    {
        return view("user.profil.index",
         [
            "title" => "Profile"
        ]);
    }
}
