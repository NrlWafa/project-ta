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


        // Pelamar::create($req->except(['_token', 'submit']));
        // return redirect('User')->with('sukses', 'Data Berhasil Tersimpan');

        $req->validate(
            [
                'nama_lengkap' => 'required',
                'nama_panggilan' => 'required',
                'jenis_kelamin' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'status_perkawinan' => 'required',
                'agama' => 'required',
                'alamat_ktp' => 'required',
                'alamat_dom' => 'required',
                'kel' => 'required',
                'kec' => 'required',
                'kab_kota' => 'required',
                'provinsi' => 'required',
                'no_hp' => 'required',
                'no_telprumah' => 'nullable',
                'no_ktp' => 'required',
                'tinggi_badan' => 'nullable',
                'berat_badan' => 'nullable',
                'uk_baju' => 'nullable',
                'uk_celana' => 'nullable',
                'uk_sepatu' => 'nullable',
                'nama_pasangan' => 'nullable',
                'status_psg' => 'nullable',
                'tmp_lahir_psg' => 'nullable',
                'tgl_lahir_psg' => 'nullable',
                'pekerjaan_psg' => 'nullable',
                'alamat_psg' => 'nullable',
                'no_hp_psg' => 'nullable',
                'anak1' => 'nullable',
                'anak2' => 'nullable',
                'anak3' => 'nullable',
                'nama_ayh' => 'required',
                'tmp_lahir_ayh' => 'required',
                'tgl_lahir_ayh' => 'required',
                'pekerjaan_ayh' => 'required',
                'alamat_ayh' => 'required',
                'no_hp_ayh' => 'required',
                'nama_ibu' => 'required',
                'tmp_lahir_ibu' => 'required',
                'tgl_lahir_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'alamat_ibu' => 'required',
                'no_hp_ibu' => 'required',
                'gol_dar' => 'nullable',
                'pend_formal' => 'required',
                'tmp_pend' => 'required',
                'thn_pend' => 'required',
                'jurusan_pend' => 'required',
                'pend_nonformal' => 'nullable',
                'tmp_pend_non' => 'nullable',
                'thn_pend_non' => 'nullable',
                'jurusan_pend_non' => 'nullable',
                'nama_perusahaan' => 'nullable',
                'bidang_usaha' => 'nullable',
                'jabatan' => 'nullable',
                'tahun_masuk' => 'nullable',
                'alasan_keluar' => 'nullable',
                'riwayat_penyakit' => 'nullable',
                'rs' => 'nullable',
                'lama_dirawat' => 'nullable',
                'bahasa_dikuasai' => 'nullable',
                'organisasi' => 'nullable',
                'nm_kontak' => 'required',
                'no_kontak' => 'required',
                'hubungan' => 'required',
                'no_npwp' => 'nullable',
                'no_bpjs_ket' => 'nullable',
                'no_bpjs_kes' => 'nullable',
                'jabatan_lamaran' => 'required',
                'foto_kk' => 'required|mimes:jpeg,jpg,png',
                'foto_kta' => 'required|mimes:jpeg,jpg,png',
                'foto_npwp' => 'nullable|mimes:jpeg,jpg,png',
                'pas_foto' => 'required|mimes:jpeg,jpg,png',
                'foto_ktp' => 'required|mimes:jpeg,jpg,png'


            ],
            [
                // 'nama_lengkap.required' => 'Nama Wajib diisi!',
                // 'nama_lengkap.required' => 'Foto tidak boleh kosong',
                // 'nama_panggilan.required' => 'Nama Wajib diisi!',
                // 'nama_panggilan.required' => 'Foto tidak boleh kosong',
                // 'jenis_kelamin.required' => 'Nama Wajib diisi!',
                // 'jenis_kelamin.required' => 'Foto tidak boleh kosong',
                // 'tempat_lahir.required' => 'Nama Wajib diisi!',
                // 'tempat_lahir.required' => 'Foto tidak boleh kosong',
                // 'tanggal_lahir.required' => 'Nama Wajib diisi!',
                // 'tanggal_lahir.required' => 'Foto tidak boleh kosong',
                // 'status_perkawinan.required' => 'Nama Wajib diisi!',
                // 'status_perkawinan.required' => 'Foto tidak boleh kosong',
                // 'agama.required' => 'Nama Wajib diisi!',
                // 'agama.required' => 'Foto tidak boleh kosong',
                // 'alamat_ktp.required' => 'Nama Wajib diisi!',
                // 'alamat_ktp.required' => 'Foto tidak boleh kosong',
                // 'alamat_dom.required' => 'Nama Wajib diisi!',
                // 'alamat_dom.required' => 'Foto tidak boleh kosong',
                // 'kel.required' => 'Nama Wajib diisi!',
                // 'kel.required' => 'Foto tidak boleh kosong',
                // 'kec.required' => 'Nama Wajib diisi!',
                // 'kec.required' => 'Foto tidak boleh kosong',
                // 'kab_kota.required' => 'Nama Wajib diisi!',
                // 'kab_kota.required' => 'Foto tidak boleh kosong',
                // 'provinsi.required' => 'Nama Wajib diisi!',
                // 'provinsi.required' => 'Foto tidak boleh kosong',
                // 'no_hp.required' => 'Nama Wajib diisi!',
                // 'no_hp.required' => 'Foto tidak boleh kosong',
                // 'nama_ayh.required' => 'Nama Wajib diisi!',
                // 'nama_ayh.required' => 'Foto tidak boleh kosong',
                // 'tmp_lahir_ayh.required' => 'Nama Wajib diisi!',
                // 'tmp_lahir_ayh.required' => 'Foto tidak boleh kosong',









                'nama.required' => 'Nama Wajib diisi!',
                'foto_kk.required' => 'Foto tidak boleh kosong',
                'foto_kk.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',

                'foto_kta.required' => 'Foto tidak boleh kosong',
                'foto_kta.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',

                'foto_npwp.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',

                'pas_foto.required' => 'Foto tidak boleh kosong',
                'pas_foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',

                'foto_ktp.required' => 'Foto tidak boleh kosong',
                'foto_ktp.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG'
            ]
        );



        // Kartu Keluarga
        $foto_kk = $req->file('foto_kk');
        $foto_ekstensi = $foto_kk->extension();
        $foto_kk_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_kk->move(public_path('foto_kk'), $foto_kk_nama);

        // KTA
        $foto_kta = $req->file('foto_kta');
        $foto_ekstensi = $foto_kta->extension();
        $foto_kta_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_kta->move(public_path('foto_kta'), $foto_kta_nama);

        // NPWP
        $foto_npwp = $req->file('foto_npwp');
        $foto_ekstensi = $foto_npwp->extension();
        $foto_npwp_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_npwp->move(public_path('foto_npwp'), $foto_npwp_nama);

        // PAS FOTO
        $pas_foto = $req->file('pas_foto');
        $foto_ekstensi = $pas_foto->extension();
        $pas_foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $pas_foto->move(public_path('pas_foto'), $pas_foto_nama);

        // KTP
        $foto_file = $req->file('foto_ktp');
        $foto_ekstensi = $foto_file->extension();
        $foto_ktp_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto_ktp'), $foto_ktp_nama);


        $data = [
            'nama_lengkap' => $req->input('nama_lengkap'),
            'id_user' => auth()->user()->id,
            'nama_panggilan' => $req->input('nama_panggilan'),
            'jenis_kelamin' => $req->input('jenis_kelamin'),
            'tempat_lahir' => $req->input('tempat_lahir'),
            'tanggal_lahir' => $req->input('tanggal_lahir'),
            'status_perkawinan' => $req->input('status_perkawinan'),
            'agama' => $req->input('agama'),
            'alamat_ktp' => $req->input('alamat_ktp'),
            'alamat_dom' => $req->input('alamat_dom'),
            'kel' => $req->input('kel'),
            'kec' => $req->input('kec'),
            'kab_kota' => $req->input('kab_kota'),
            'provinsi' => $req->input('provinsi'),
            'no_hp' => $req->input('no_hp'),
            'no_telprumah' => $req->input('no_telprumah'),
            'no_ktp' => $req->input('no_ktp'),
            'tinggi_badan' => $req->input('tinggi_badan'),
            'berat_badan' => $req->input('berat_badan'),
            'uk_baju' => $req->input('uk_baju'),
            'uk_celana' => $req->input('uk_celana'),
            'uk_sepatu' => $req->input('uk_sepatu'),
            'nama_pasangan' => $req->input('nama_pasangan'),
            'status_psg' => $req->input('status_psg'),
            'tmp_lahir_psg' => $req->input('tmp_lahir_psg'),
            'tgl_lahir_psg' => $req->input('tgl_lahir_psg'),
            'pekerjaan_psg' => $req->input('pekerjaan_psg'),
            'alamat_psg' => $req->input('alamat_psg'),
            'no_hp_psg' => $req->input('no_hp_psg'),
            'anak1' => $req->input('anak1'),
            'anak2' => $req->input('anak2'),
            'anak3' => $req->input('anak3'),
            'nama_ayh' => $req->input('nama_ayh'),
            'tmp_lahir_ayh' => $req->input('tmp_lahir_ayh'),
            'tgl_lahir_ayh' => $req->input('tgl_lahir_ayh'),
            'pekerjaan_ayh' => $req->input('pekerjaan_ayh'),
            'alamat_ayh' => $req->input('alamat_ayh'),
            'no_hp_ayh' => $req->input('no_hp_ayh'),
            'nama_ibu' => $req->input('nama_ibu'),
            'tmp_lahir_ibu' => $req->input('tmp_lahir_ibu'),
            'tgl_lahir_ibu' => $req->input('tgl_lahir_ibu'),
            'pekerjaan_ibu' => $req->input('pekerjaan_ibu'),
            'alamat_ibu' => $req->input('alamat_ibu'),
            'no_hp_ibu' => $req->input('no_hp_ibu'),
            'gol_dar' => $req->input('gol_dar'),
            'pend_formal' => $req->input('pend_formal'),
            'tmp_pend' => $req->input('tmp_pend'),
            'thn_pend' => $req->input('thn_pend'),
            'jurusan_pend' => $req->input('jurusan_pend'),
            'pend_nonformal' => $req->input('pend_nonformal'),
            'tmp_pend_non' => $req->input('tmp_pend_non'),
            'thn_pend_non' => $req->input('thn_pend_non'),
            'jurusan_pend_non' => $req->input('jurusan_pend_non'),
            'nama_perusahaan' => $req->input('nama_perusahaan'),
            'bidang_usaha' => $req->input('bidang_usaha'),
            'jabatan' => $req->input('jabatan'),
            'tahun_masuk' => $req->input('tahun_masuk'),
            'alasan_keluar' => $req->input('alasan_keluar'),
            'riwayat_penyakit' => $req->input('riwayat_penyakit'),
            'rs' => $req->input('rs'),
            'lama_dirawat' => $req->input('lama_dirawat'),
            'bahasa_dikuasai' => $req->input('bahasa_dikuasai'),
            'organisasi' => $req->input('organisasi'),
            'nm_kontak' => $req->input('nm_kontak'),
            'no_kontak' => $req->input('no_kontak'),
            'hubungan' => $req->input('hubungan'),
            'no_npwp' => $req->input('no_npwp'),
            'no_bpjs_ket' => $req->input('no_bpjs_ket'),
            'no_bpjs_kes' => $req->input('no_bpjs_kes'),
            'jabatan_lamaran' => $req->input('jabatan_lamaran'),

            'foto_kk' => $foto_kk_nama,
            'foto_kta' => $foto_kta_nama,
            'foto_npwp' => $foto_npwp_nama,
            'pas_foto' => $pas_foto_nama,
            'foto_ktp' => $foto_ktp_nama
        ];

        // Pelamar::create($data);
        // return redirect('User')->with('sukses', 'Data Berhasil Tersimpan');

        try {
            Pelamar::create($data);
            return redirect('User')->with('Success', 'Pelamar berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan saat membuat pelamar: ' . $e->getMessage());
        }
    }
}
