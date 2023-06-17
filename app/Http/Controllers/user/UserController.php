<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profil()
    {
        // Cek hak akses jika dia bukan User, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 2) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        return view(
            "user.profil.index",
            [
                "title" => "Profile"
            ]
        );
    }


    public function index()
    {
        // Cek hak akses jika dia bukan User, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 2) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        return view("user.dashboard.index", [
            "title" => "User"
        ]);
    }

    public function pendaftar()
    {
        // Cek hak akses jika dia bukan User, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 2) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        return view("user.dashboard.form-lamaran", [
            "title" => "User"
        ]);
    }

    public function store(Request $req)
    {
        // Cek hak akses jika dia bukan User, maka akan diarahkan ke Landingpage
        if (auth()->user()->id_level != 2) {
            return redirect('/')->withErrors('Anda tidak memiliki hak akses.');
        }

        Pelamar::create($req->except(['_token', 'submit']));
        return redirect('User')->with('sukses', 'Data Berhasil Tersimpan');

        // $req->validate([
        //     'nama_lengkap'=>'required', 
        //     'foto_kk' => 'required|mimes:jpeg,jpg,png',
        //     'foto_kta' => 'required|mimes:jpeg,jpg,png',
        //     'foto_npwp' => 'required|mimes:jpeg,jpg,png',
        //     'pas_foto' => 'required|mimes:jpeg,jpg,png',
        //     'foto_ktp' => 'required|mimes:jpeg,jpg,png'


        // ],[
        //     'nama.required' => 'Nama Wajib diisi!',
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



        // // Kartu Keluarga
        // $foto_kk = $req->file('foto_kk');
        // $foto_ekstensi = $foto_kk->extension();
        // $foto_kk_nama = date('ymdhis').".". $foto_ekstensi;
        // $foto_kk->move(public_path('foto_kk'), $foto_kk_nama);

        // // KTA
        // $foto_kta = $req->file('foto_kta');
        // $foto_ekstensi = $foto_kta->extension();
        // $foto_kta_nama = date('ymdhis').".". $foto_ekstensi;
        // $foto_kta->move(public_path('foto_kta'), $foto_kta_nama);

        // // NPWP
        // $foto_npwp = $req->file('foto_npwp');
        // $foto_ekstensi = $foto_npwp->extension();
        // $foto_npwp_nama = date('ymdhis').".". $foto_ekstensi;
        // $foto_npwp->move(public_path('foto_npwp'), $foto_npwp_nama);

        // // PAS FOTO
        // $pas_foto = $req->file('pas_foto');
        // $foto_ekstensi = $pas_foto->extension();
        // $pas_foto_nama = date('ymdhis').".". $foto_ekstensi;
        // $pas_foto->move(public_path('pas_foto'), $pas_foto_nama);

        // // KTP
        // $foto_file = $req->file('foto_ktp');
        // $foto_ekstensi = $foto_file->extension();
        // $foto_ktp_nama = date('ymdhis').".". $foto_ekstensi;
        // $foto_file->move(public_path('foto_ktp'), $foto_ktp_nama);


        // $data = [
        //     'nama_lengkap' => $req->input('nama_lengkap'),
        //     'foto_kk' => $foto_kk_nama,
        //     'foto_kta' => $foto_kta_nama,
        //     'foto_npwp' => $foto_npwp_nama,
        //     'pas_foto' => $pas_foto_nama,
        //     'foto_ktp' => $foto_ktp_nama
        //  ];

        // Pelamar::create($data);
        // return redirect('User')->with('sukses', 'Data Berhasil Tersimpan');


    }
}
