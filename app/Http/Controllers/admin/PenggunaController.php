<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Pelamar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{

    public function index()
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        $user = DB::table('User')

            ->join('level', 'User.id_level', '=', 'level.id')
            // ->join('pelamar', 'User.id', '=', 'pelamar.id_user')
            ->select('User.id', 'User.nama', 'User.email', 'level.level_name', 'User.created_at', 'User.email_verified_at')
            ->get();

        return view("admin.pengguna.index", compact('user'), [
            "title" => "Data Pengguna"
        ]);
    }

    public function hapus_data_pengguna($id)
    {
        // Cek hak akses jika dia bukan admin, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 1) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        // Ketika akun User dihapus maka data yang diinput user sebagai form lamaran ikut terhapus
        Pelamar::where('id_user', $id)->delete();
        // Hapus akun User
        User::where('id', $id)->delete();
        return redirect('Pengguna');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level');
    }
}
