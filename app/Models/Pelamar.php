<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelamar extends Model
{
    use HasFactory;
    

    protected $table = 'Pelamar';
    protected $guarded = [];

    // public static function store($req)
    // {
    //     $file_kk = $req->file('foto_kk');   
    //     $name_kk = session('auth')->id . '.' . $file_kk->getClientOriginalExtension();
    //     $req->file('foto_kk')->move(public_path('/foto/foto_kk'), $name_kk);

    //     $file_kta = $req->file('foto_kta');  
    //     $name_kta = session('auth')->id . '.' . $file_kta->getClientOriginalExtension();
    //     $req->file('foto_kta')->move(public_path('/foto/foto_kta'), $name_kta); 

    //     $file_npwp = $req->file('foto_npwp');   
    //     $name_npwp = session('auth')->id . '.' . $file_npwp->getClientOriginalExtension();
    //     $req->file('foto_npwp')->move(public_path('/foto/foto_npwp'), $name_npwp);

    //     $file_foto = $req->file('pas_foto');   
    //     $name_foto = session('auth')->id . '.' . $file_foto->getClientOriginalExtension();
    //     $req->file('pas_foto')->move(public_path('/foto/pas_foto'), $name_foto);

    //     $file_ktp = $req->file('foto_ktp');  
    //     $name_ktp = session('auth')->id . '.' . $file_ktp->getClientOriginalExtension();
    //     $req->file('foto_ktp')->move(public_path('/foto/foto_ktp'), $name_ktp);

    //     DB::table('pelamar')->insert([
    //         'id' => session('auth')->id,
    //         // 'langkah' => $req->input('jumlah_langkah'),
    //         'created_at' => new \DateTime(),
    //         'foto_kk' => $name_kk,
    //         'foto_kta' => $name_kta,
    //         'foto_npwp' => $name_npwp,
    //         'pas_foto' => $name_foto,
    //         'foto_ktp' => $name_ktp,
    //     ]);
    // }
    
}

