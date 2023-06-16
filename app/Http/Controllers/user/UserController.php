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
        // $req->validate([
        //     'foto_kk' => 'required|mimes:jpeg,jpg,png',
        //     'foto_kta' => 'required|mimes:jpeg,jpg,png',
        //     'foto_npwp' => 'required|mimes:jpeg,jpg,png',
        //     'pas_foto' => 'required|mimes:jpeg,jpg,png',
        //     'foto_ktp' => 'required|mimes:jpeg,jpg,png'
                                  

        // ],[
        //     'foto_kk.required' => 'Silahkan masukkan foto',
        //     'foto_kk.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',

        //     'foto_kta.required' => 'Silahkan masukkan foto',
        //     'foto_kta.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',

        //     'foto_npwp.required' => 'Silahkan masukkan foto',
        //     'foto_npwp.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',

        //     'pas_foto.required' => 'Silahkan masukkan foto',
        //     'pas_foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',
            
        //     'foto_ktp.required' => 'Silahkan masukkan foto',
        //     'foto_ktp.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG'
        // ]
        // );
    
        Pelamar::create($req->except(['_token','submit']));
        // return redirect('User')->with('sukses', 'Data Berhasil Tersimpan');

        // Kartu Keluarga
        $foto_kk = $req->file('foto_kk');
        $foto_ekstensi = $foto_kk->extension();
        $foto_kk_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_kk->move(public_path('foto_kk'), $foto_kk_nama);

        // KTA
        $foto_kta = $req->file('foto_kta');
        $foto_ekstensi = $foto_kta->extension();
        $foto_kta_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_kta->move(public_path('foto_kta'), $foto_kta_nama);

        // NPWP
        $foto_npwp = $req->file('foto_npwp');
        $foto_ekstensi = $foto_npwp->extension();
        $foto_npwp_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_npwp->move(public_path('foto_npwp'), $foto_npwp_nama);

        // PAS FOTO
        $pas_foto = $req->file('pas_foto');
        $foto_ekstensi = $pas_foto->extension();
        $pas_foto_nama = date('ymdhis').".". $foto_ekstensi;
        $pas_foto->move(public_path('pas_foto'), $pas_foto_nama);

        // KTP
        $foto_ktp = $req->file('foto_ktp');
        $foto_ekstensi = $foto_ktp->extension();
        $foto_ktp_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_ktp->move(public_path('foto_ktp'), $foto_ktp_nama);


        $data = [
            'foto_kk' => $foto_kk_nama,
            'foto_kta' => $foto_kta_nama,
            'foto_npwp' => $foto_npwp_nama,
            'pas_foto' => $pas_foto_nama,
            'foto_ktp' => $foto_ktp_nama
         ];

    }
}
