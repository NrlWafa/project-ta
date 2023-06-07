<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        return view("admin.pelamar.index", [
            "title" => "Data Pelamar"
        ]);
    }

    public function pelamar()
    {
        return view("admin.pelamar.detail", [
            "title" => "Data Pelamar"
        ]);
    }
}
