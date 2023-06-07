<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.index", [
            "title" => "Dashboard"
        ]);
    }

     public function dashboarddetailpelamar()
    {
        return view("admin.dashboard.detail-pelamar", [
            "title" => "Dashboard"
        ]);
    }

    
}
