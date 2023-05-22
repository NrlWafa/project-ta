<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPenggunaController extends Controller
{
     public function index()
    {
        return view("admin.datapengguna");
    }
}
