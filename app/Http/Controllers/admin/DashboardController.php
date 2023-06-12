<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile()
    {
        return view("admin.profil.index", [
            "title" => "Profile"
        ]);
    }

    public function index()
    {
       $pelamar = Pelamar::all();

        return view("admin.dashboard.index",compact('pelamar'), [
            "title" => "Dashboard"
        ]);
    }

     public function dashboarddetailpelamar()
    {
        $pelamar = Pelamar::all();

        return view("admin.dashboard.detail-pelamar",compact('pelamar'), [
            "title" => "Dashboard"
        ]);
    }

    
}
