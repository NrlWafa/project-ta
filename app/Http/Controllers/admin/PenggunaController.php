<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
  
    public function index()
    {
        return view("admin.pengguna.index", [
            "title" => "Data Pengguna"
        ]);
    }
}