<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
  
    public function index()
    {
        $user = User::all();

        return view("admin.pengguna.index", compact('user'), [
            "title" => "Data Pengguna"
        ]);
    }

      public function hapus_data_pengguna($id)
    {
        DB::table('User')->where('id', $id)->delete();
        return redirect('Data Pengguna');
    }
  
}
