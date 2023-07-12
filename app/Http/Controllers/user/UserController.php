<?php

namespace App\Http\Controllers\user;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Helper;
use App\Models\Satpam;
use App\Models\Pelamar;
use App\Models\Teknisi;
use App\Models\Operator;
use Illuminate\Http\Request;
use App\Models\CleaningService;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Session;


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
        try {
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

                    'usia' => 'required',

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
                    'satpam' => 'nullable',
                    'tinggi_badan' => 'nullable',
                    'berat_badan' => 'nullable',
                    'uk_baju' => 'nullable',
                    'uk_celana' => 'nullable',
                    'uk_sepatu' => 'nullable',
                    'sim' => 'nullable',
                    'komp' => 'nullable',
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
                    'no_hp_ayh' => 'nullable',
                    'nama_ibu' => 'required',
                    'tmp_lahir_ibu' => 'required',
                    'tgl_lahir_ibu' => 'required',
                    'pekerjaan_ibu' => 'required',
                    'alamat_ibu' => 'required',
                    'no_hp_ibu' => 'nullable',
                    'gol_dar' => 'nullable',
                    'pend_formal' => 'required',
                    'tmp_pend' => 'required',
                    'thn_pend' => 'required',
                    'jurusan_pend' => 'required',
                    'pend_nonformal' => 'required',
                    'tmp_pend_non' => 'nullable',
                    'thn_pend_non' => 'nullable',
                    'jurusan_pend_non' => 'nullable',
                    'bukti_pend_non' => 'nullable',

                    'nama_perusahaan' => 'nullable',
                    'bidang_usaha' => 'nullable',
                    'jabatan' => 'nullable',
                    'tahun_masuk' => 'nullable',
                    'alasan_keluar' => 'nullable',
                    'lama_kerja' => 'required',
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
                    'foto_kta' => 'nullable|mimes:jpeg,jpg,png',
                    'foto_npwp' => 'nullable|mimes:jpeg,jpg,png',
                    'pas_foto' => 'required|mimes:jpeg,jpg,png',
                    'foto_ktp' => 'required|mimes:jpeg,jpg,png'
                ],
                [
                    'nama_lengkap.required' => 'Nama Lengkap Wajib diisi!',
                    'nama_panggilan.required' => 'Nama Panggilan Wajib diisi!',
                    'jenis_kelamin.required' => 'Jenis Kelamin Wajib dipilih!',
                    'tempat_lahir.required' => 'Tempat Lahir Wajib diisi!',
                    'tanggal_lahir.required' => 'Tanggal Lahir Wajib diisi!',
                    'usia.required' => 'Usia Saat Mengajukan Lamaran Wajib diisi!',
                    'status_perkawinan.required' => 'Status Perkawinan Wajib dipilih!',
                    'agama.required' => 'Agama Wajib dipilih!',
                    'alamat_ktp.required' => 'Alamat KTP Wajib diisi!',
                    'alamat_dom.required' => 'Alamat Domisili Wajib diisi!',
                    'kel.required' => 'Kelurahan Wajib diisi!',
                    'kec.required' => 'Kecamatan Wajib diisi!',
                    'kab_kota.required' => 'Kabupaten/Kota Wajib diisi!',
                    'provinsi.required' => 'Provinsi Wajib diisi!',
                    'no_hp.required' => 'Nomor Handphone Wajib diisi!',
                    'no_ktp.required' => 'Nomor KTP Wajib diisi!',
                    'nama_ayh.required' => 'Nama Ayah Wajib diisi!',
                    'tmp_lahir_ayh.required' => 'Tempat Lahir Ayah Wajib diisi!',
                    'tgl_lahir_ayh.required' => 'Tanggal Lahir Ayah Wajib diisi!',
                    'pekerjaan_ayh.required' => 'Pekerjaan Ayah Wajib diisi!',
                    'alamat_ayh.required' => 'Alamat Ayah Wajib diisi!',
                    'nama_ibu.required' => 'Nama Ibu Wajib diisi!',
                    'tmp_lahir_ibu.required' => 'Tempat Lahir Ibu Wajib diisi!',
                    'tgl_lahir_ibu.required' => 'Tanggal Lahir Ibu Wajib diisi!',
                    'pekerjaan_ibu.required' => 'Pekerjaan Ibu Wajib diisi!',
                    'alamat_ibu.required' => 'Alamat Ibu Wajib diisi!',
                    'pend_formal.required' => 'Pendidikan Formal Wajib diisi!',
                    'tmp_pend.required' => 'Tempat Pendidikan Formal Wajib diisi!',
                    'thn_pend.required' => 'Tahun Pendidikan Formal Wajib diisi!',
                    'jurusan_pend.required' => 'Jurusan Pendidikan Formal Wajib diisi!',
                    'pend_nonformal.required' => 'Pendidikan Non Formal Wajib diisi!',

                    'nm_kontak.required' => 'Nama Kontak yang Bisa Dihubungi Wajib diisi!',
                    'no_kontak.required' => 'Nomor Kontak yang Bisa Dihubungi Wajib diisi!',
                    'hubungan.required' => 'Hubungan Kekeluargaan dengan Kontak Wajib diisi!',
                    'lama_kerja.required' => 'Pengalaman Kerja Wajib diisi!',
                    'jabatan_lamaran.required' => 'Jabatan yang Dilamar Wajib dipilih!',
                    'nama.required' => 'Nama Wajib diisi!',

                    'bukti_pend_non.mimes' => 'Bukti hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',
                    'foto_kk.required' => 'Foto Kartu Keluarga tidak boleh kosong!',
                    'foto_kk.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',
                    'foto_kta.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',
                    'foto_npwp.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',
                    'pas_foto.required' => 'Pas Foto tidak boleh kosong!',
                    'pas_foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG',
                    'foto_ktp.required' => 'Foto KTP tidak boleh kosong!',
                    'foto_ktp.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, dan PNG'
                ]
            );



            $bukti_pend_non = $req->file('bukti_pend_non');

            if ($bukti_pend_non) {
                $foto_ekstensi = $bukti_pend_non->extension();
                $bukti_pend_non_nama = date('ymdhis') . "." . $foto_ekstensi;
                $bukti_pend_non->move(public_path('bukti_pend_non'), $bukti_pend_non_nama);
            } else {
                // Tindakan yang perlu diambil jika tidak ada file yang diunggah (null)
                // Lakukan tindakan alternatif jika foto tidak diunggah
                $bukti_pend_non_nama = null; // Atau berikan nilai default sesuai kebutuhan
            }


            // Kartu Keluarga
            $foto_kk = $req->file('foto_kk');
            $foto_ekstensi = $foto_kk->extension();
            $foto_kk_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_kk->move(public_path('foto_kk'), $foto_kk_nama);

            $foto_kta = $req->file('foto_kta');
            if ($foto_kta) {
                $foto_ekstensi = $foto_kta->extension();
                $foto_kta_nama = date('ymdhis') . "." . $foto_ekstensi;
                $foto_kta->move(public_path('foto_kta'), $foto_kta_nama);
            } else {
                // Lakukan tindakan alternatif jika foto tidak diunggah
                $foto_kta_nama = null; // Atau berikan nilai default sesuai kebutuhan
            }

            $foto_npwp = $req->file('foto_npwp');

            if ($foto_npwp) {
                $foto_ekstensi = $foto_npwp->extension();
                $foto_npwp_nama = date('ymdhis') . "." . $foto_ekstensi;
                $foto_npwp->move(public_path('foto_npwp'), $foto_npwp_nama);
            } else {
                // Tindakan yang perlu diambil jika tidak ada file yang diunggah (null)
                // Lakukan tindakan alternatif jika foto tidak diunggah
                $foto_npwp_nama = null; // Atau berikan nilai default sesuai kebutuhan
            }

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
                'usia' => $req->input('usia'),
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
                'satpam' => $req->input('satpam'),
                'tinggi_badan' => $req->input('tinggi_badan'),
                'berat_badan' => $req->input('berat_badan'),
                'uk_baju' => $req->input('uk_baju'),
                'uk_celana' => $req->input('uk_celana'),
                'uk_sepatu' => $req->input('uk_sepatu'),
                'sim' => $req->input('sim'),
                'komp' => $req->input('komp'),
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
                'lama_kerja' => $req->input('lama_kerja'),
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

                'bukti_pend_non' => $bukti_pend_non_nama,
                'foto_kk' => $foto_kk_nama,
                'foto_kta' => $foto_kta_nama,
                'foto_npwp' => $foto_npwp_nama,
                'pas_foto' => $pas_foto_nama,
                'foto_ktp' => $foto_ktp_nama
            ];

            $pelamar = Pelamar::create($data);


            // Konversi Perhitungan Satpam
            $konversi_s_pend_formal = $req->input('pend_formal');
            $konversi_s_pend_nonformal = $req->input('pend_nonformal');
            $konversi_s_usia = $req->input('usia');
            $konversi_s_satpam = $req->input('satpam');
            $konversi_s_tinggi_badan = $req->input('tinggi_badan');
            $konversi_s_lama_kerja = $req->input('lama_kerja');

            //Kondisi SATPAM
            if ($konversi_s_pend_formal == "SLTA") {
                $konversi_s_pend_formal = "1";
            } else if ($konversi_s_pend_formal == "D3") {
                $konversi_s_pend_formal = "2";
            } else if ($konversi_s_pend_formal == "S1") {
                $konversi_s_pend_formal = "3";
            } else if ($konversi_s_pend_formal == "S2") {
                $konversi_s_pend_formal = "4";
            } else if ($konversi_s_pend_formal == "S3") {
                $konversi_s_pend_formal = "5";
            }

            if ($konversi_s_pend_nonformal == "Tidak Ada") {
                $konversi_s_pend_nonformal = "1";
            } else if ($konversi_s_pend_nonformal == "Ada") {
                $konversi_s_pend_nonformal = "2";
            }

            if ($konversi_s_usia == "31-35 Tahun") {
                $konversi_s_usia = "3";
            } else if ($konversi_s_usia == "25-30 Tahun") {
                $konversi_s_usia = "2";
            } else if ($konversi_s_usia == "18-24 Tahun") {
                $konversi_s_usia = "1";
            }

            if ($konversi_s_satpam == "Tidak Ada") {
                $konversi_s_satpam = "1";
            } else if ($konversi_s_satpam == "Gada Pratama") {
                $konversi_s_satpam = "2";
            } else if ($konversi_s_satpam == "Gada Madya") {
                $konversi_s_satpam = "3";
            } else if ($konversi_s_satpam == "Gada Utama") {
                $konversi_s_satpam = "4";
            }

            if ($konversi_s_tinggi_badan == "Kurang Dari 160 Cm") {
                $konversi_s_tinggi_badan = "1";
            } else if ($konversi_s_tinggi_badan == "160-185 Cm") {
                $konversi_s_tinggi_badan = "2";
            } else if ($konversi_s_tinggi_badan == "Lebih Dari 185 Cm") {
                $konversi_s_tinggi_badan = "3";
            }

            if ($konversi_s_lama_kerja == "0 Bulan") {
                $konversi_s_lama_kerja = "1";
            } else if ($konversi_s_lama_kerja == "1-6 Bulan") {
                $konversi_s_lama_kerja = "2";
            } else if ($konversi_s_lama_kerja == "7-12 Bulan") {
                $konversi_s_lama_kerja = "3";
            } else if ($konversi_s_lama_kerja == "13-18 Bulan") {
                $konversi_s_lama_kerja = "4";
            } else if ($konversi_s_lama_kerja == "19-24 Bulan") {
                $konversi_s_lama_kerja = "5";
            }

            //Array (Simpan Data) SATPAM
            $dataSatpam = [
                'id' => $req->input('id'),
                'id_pelamar' => $pelamar->id,
                'pend_formal' => $konversi_s_pend_formal,
                'pend_nonformal' => $konversi_s_pend_nonformal,
                'usia' =>  $konversi_s_usia,
                'satpam' => $konversi_s_satpam,
                'tinggi_badan' => $konversi_s_tinggi_badan,
                'lama_kerja' => $konversi_s_lama_kerja,
                'jarak_c1' => $req->input('jarak_c1'),
                'jarak_c2' => $req->input('jarak_c2'),
                'iterasi' => $req->input('iterasi'),
            ];

            // Konversi Perhitungan CLEANING SERVICE
            $konversi_cs_pend_formal = $req->input('pend_formal');
            $konversi_cs_pend_nonformal = $req->input('pend_nonformal');
            $konversi_cs_usia = $req->input('usia');
            $konversi_cs_lama_kerja = $req->input('lama_kerja');

            //Kondisi CLEANING SERVICE
            if ($konversi_cs_pend_formal == "SLTA") {
                $konversi_cs_pend_formal = "1";
            } else if ($konversi_cs_pend_formal == "D3") {
                $konversi_cs_pend_formal = "2";
            } else if ($konversi_cs_pend_formal == "S1") {
                $konversi_cs_pend_formal = "3";
            } else if ($konversi_cs_pend_formal == "S2") {
                $konversi_cs_pend_formal = "4";
            } else if ($konversi_cs_pend_formal == "S3") {
                $konversi_cs_pend_formal = "5";
            }

            if ($konversi_cs_pend_nonformal == "Tidak Ada") {
                $konversi_cs_pend_nonformal = "1";
            } else if ($konversi_cs_pend_nonformal == "Ada") {
                $konversi_cs_pend_nonformal = "2";
            }

            if ($konversi_cs_usia == "31-35 Tahun") {
                $konversi_cs_usia = "0";
            } else if ($konversi_cs_usia == "25-30 Tahun") {
                $konversi_cs_usia = "2";
            } else if ($konversi_cs_usia == "18-24 Tahun") {
                $konversi_cs_usia = "1";
            }

            if ($konversi_cs_lama_kerja == "0 Bulan") {
                $konversi_cs_lama_kerja = "1";
            } else if ($konversi_cs_lama_kerja == "1-6 Bulan") {
                $konversi_cs_lama_kerja = "2";
            } else if ($konversi_cs_lama_kerja == "7-12 Bulan") {
                $konversi_cs_lama_kerja = "3";
            } else if ($konversi_cs_lama_kerja == "13-18 Bulan") {
                $konversi_cs_lama_kerja = "4";
            } else if ($konversi_cs_lama_kerja == "19-24 Bulan") {
                $konversi_cs_lama_kerja = "5";
            }

            //Array (Simpan Data) CLEANING SERVICE
            $dataCleaningService = [
                'id' => $req->input('id'),
                // 'id_pelamar' => $req->input('id_pelamar'),
                'id_pelamar' => $pelamar->id,
                'pend_formal' => $konversi_cs_pend_formal,
                'pend_nonformal' => $konversi_cs_pend_nonformal,
                'usia' => $konversi_cs_usia,
                'lama_kerja' => $konversi_cs_lama_kerja,
                'jarak_c1' => $req->input('jarak_c1'),
                'jarak_c2' => $req->input('jarak_c2'),
                'iterasi' => $req->input('iterasi'),
            ];


            // Konversi Perhitungan TEKNISI
            $konversi_t_pend_formal = $req->input('pend_formal');
            $konversi_t_pend_nonformal = $req->input('pend_nonformal');
            $konversi_t_usia = $req->input('usia');
            $konversi_t_lama_kerja = $req->input('lama_kerja');
            $konversi_t_komp = $req->input('komp');

            //Kondisi TEKNISI
            if ($konversi_t_pend_formal == "SLTA") {
                $konversi_t_pend_formal = "0";
            } else if ($konversi_t_pend_formal == "D3") {
                $konversi_t_pend_formal = "1";
            } else if ($konversi_t_pend_formal == "S1") {
                $konversi_t_pend_formal = "2";
            } else if ($konversi_t_pend_formal == "S2") {
                $konversi_t_pend_formal = "3";
            } else if ($konversi_t_pend_formal == "S3") {
                $konversi_t_pend_formal = "4";
            }

            if ($konversi_t_pend_nonformal == "Tidak Ada") {
                $konversi_t_pend_nonformal = "1";
            } else if ($konversi_t_pend_nonformal == "Ada") {
                $konversi_t_pend_nonformal = "2";
            }

            if ($konversi_t_usia == "31-35 Tahun") {
                $konversi_t_usia = "0";
            } else if ($konversi_t_usia == "25-30 Tahun") {
                $konversi_t_usia = "2";
            } else if ($konversi_t_usia == "18-24 Tahun") {
                $konversi_t_usia = "1";
            }

            if ($konversi_t_lama_kerja == "0 Bulan") {
                $konversi_t_lama_kerja = "1";
            } else if ($konversi_t_lama_kerja == "1-6 Bulan") {
                $konversi_t_lama_kerja = "2";
            } else if ($konversi_t_lama_kerja == "7-12 Bulan") {
                $konversi_t_lama_kerja = "3";
            } else if ($konversi_t_lama_kerja == "13-18 Bulan") {
                $konversi_t_lama_kerja = "4";
            } else if ($konversi_t_lama_kerja == "19-24 Bulan") {
                $konversi_t_lama_kerja = "5";
            }

            if ($konversi_t_komp == "Tidak Ada") {
                $konversi_t_komp = "1";
            } else if ($konversi_t_komp == "Ada") {
                $konversi_t_komp = "2";
            }

            //Array (Simpan Data) TEKNISI
            $dataTeknisi = [
                'id' => $req->input('id'),
                'id_pelamar' => $pelamar->id,
                'pend_formal' =>  $konversi_t_pend_formal,
                'pend_nonformal' =>   $konversi_t_pend_nonformal,
                'usia' =>  $konversi_t_usia,
                'lama_kerja' => $konversi_t_lama_kerja,
                'komp' => $konversi_t_komp,
                'jarak_c1' => $req->input('jarak_c1'),
                'jarak_c2' => $req->input('jarak_c2'),
                'iterasi' => $req->input('iterasi'),
            ];


            // Konversi Perhitungan HELPER
            $konversi_h_pend_formal = $req->input('pend_formal');
            $konversi_h_pend_nonformal = $req->input('pend_nonformal');
            $konversi_h_usia = $req->input('usia');
            $konversi_h_lama_kerja = $req->input('lama_kerja');
            $konversi_h_komp = $req->input('komp');

            //Kondisi HELPER
            if ($konversi_h_pend_formal == "SLTA") {
                $konversi_h_pend_formal = "0";
            } else if ($konversi_h_pend_formal == "D3") {
                $konversi_h_pend_formal = "1";
            } else if ($konversi_h_pend_formal == "S1") {
                $konversi_h_pend_formal = "2";
            } else if ($konversi_h_pend_formal == "S2") {
                $konversi_h_pend_formal = "3";
            } else if ($konversi_h_pend_formal == "S3") {
                $konversi_h_pend_formal = "4";
            }

            if ($konversi_h_pend_nonformal == "Tidak Ada") {
                $konversi_h_pend_nonformal = "1";
            } else if ($konversi_h_pend_nonformal == "Ada") {
                $konversi_h_pend_nonformal = "2";
            }

            if ($konversi_h_usia == "31-35 Tahun") {
                $konversi_h_usia = "0";
            } else if ($konversi_h_usia == "25-30 Tahun") {
                $konversi_h_usia = "2";
            } else if ($konversi_h_usia == "18-24 Tahun") {
                $konversi_h_usia = "1";
            }

            if ($konversi_h_lama_kerja == "0 Bulan") {
                $konversi_h_lama_kerja = "1";
            } else if ($konversi_h_lama_kerja == "1-6 Bulan") {
                $konversi_h_lama_kerja = "2";
            } else if ($konversi_h_lama_kerja == "7-12 Bulan") {
                $konversi_h_lama_kerja = "3";
            } else if ($konversi_h_lama_kerja == "13-18 Bulan") {
                $konversi_h_lama_kerja = "4";
            } else if ($konversi_h_lama_kerja == "19-24 Bulan") {
                $konversi_h_lama_kerja = "5";
            }

            if ($konversi_h_komp == "Tidak Ada") {
                $konversi_h_komp = "1";
            } else if ($konversi_h_komp == "Ada") {
                $konversi_h_komp = "2";
            }

            //Array (Simpan Data) HELPER
            $dataHelper = [
                'id' => $req->input('id'),
                'id_pelamar' => $pelamar->id,
                'pend_formal' => $konversi_h_pend_formal,
                'pend_nonformal' => $konversi_h_pend_nonformal,
                'usia' => $konversi_h_usia,
                'lama_kerja' => $konversi_h_lama_kerja,
                'komp' => $konversi_h_komp,
                'jarak_c1' => $req->input('jarak_c1'),
                'jarak_c2' => $req->input('jarak_c2'),
                'iterasi' => $req->input('iterasi'),
            ];


            // Konversi Perhitungan OPERATOR
            $konversi_o_pend_formal = $req->input('pend_formal');
            $konversi_o_pend_nonformal = $req->input('pend_nonformal');
            $konversi_o_usia = $req->input('usia');
            $konversi_o_lama_kerja = $req->input('lama_kerja');
            $konversi_o_komp = $req->input('komp');

            //Kondisi OPERATOR
            if ($konversi_o_pend_formal == "SLTA") {
                $konversi_o_pend_formal = "0";
            } else if ($konversi_o_pend_formal == "D3") {
                $konversi_o_pend_formal = "1";
            } else if ($konversi_o_pend_formal == "S1") {
                $konversi_o_pend_formal = "2";
            } else if ($konversi_o_pend_formal == "S2") {
                $konversi_o_pend_formal = "3";
            } else if ($konversi_o_pend_formal == "S3") {
                $konversi_o_pend_formal = "4";
            }

            if ($konversi_o_pend_nonformal == "Tidak Ada") {
                $konversi_o_pend_nonformal = "1";
            } else if ($konversi_o_pend_nonformal == "Ada") {
                $konversi_o_pend_nonformal = "2";
            }

            if ($konversi_o_usia == "31-35 Tahun") {
                $konversi_o_usia = "0";
            } else if ($konversi_o_usia == "25-30 Tahun") {
                $konversi_o_usia = "2";
            } else if ($konversi_o_usia == "18-24 Tahun") {
                $konversi_o_usia = "1";
            }

            if ($konversi_o_lama_kerja == "0 Bulan") {
                $konversi_o_lama_kerja = "1";
            } else if ($konversi_o_lama_kerja == "1-6 Bulan") {
                $konversi_o_lama_kerja = "2";
            } else if ($konversi_o_lama_kerja == "7-12 Bulan") {
                $konversi_o_lama_kerja = "3";
            } else if ($konversi_o_lama_kerja == "13-18 Bulan") {
                $konversi_o_lama_kerja = "4";
            } else if ($konversi_o_lama_kerja == "19-24 Bulan") {
                $konversi_o_lama_kerja = "5";
            }

            if ($konversi_o_komp == "Tidak Ada") {
                $konversi_o_komp = "1";
            } else if ($konversi_o_komp == "Ada") {
                $konversi_o_komp = "2";
            }

            //Array (Simpan Data) OPERATOR
            $dataOperator = [
                'id' => $req->input('id'),
                'id_pelamar' => $pelamar->id,
                'pend_formal' => $konversi_o_pend_formal,
                'pend_nonformal' => $konversi_o_pend_nonformal,
                'usia' => $konversi_o_usia,
                'lama_kerja' => $konversi_o_lama_kerja,
                'komp' => $konversi_o_komp,
                'jarak_c1' => $req->input('jarak_c1'),
                'jarak_c2' => $req->input('jarak_c2'),
                'iterasi' => $req->input('iterasi'),
            ];


            // Konversi Perhitungan DRIVER
            $konversi_d_pend_formal = $req->input('pend_formal');
            $konversi_d_pend_nonformal = $req->input('pend_nonformal');
            $konversi_d_usia = $req->input('usia');
            $konversi_d_lama_kerja = $req->input('lama_kerja');
            $konversi_d_sim = $req->input('sim');

            //Kondisi DRIVER
            if ($konversi_d_pend_formal == "SLTA") {
                $konversi_d_pend_formal = "0";
            } else if ($konversi_d_pend_formal == "D3") {
                $konversi_d_pend_formal = "1";
            } else if ($konversi_d_pend_formal == "S1") {
                $konversi_d_pend_formal = "2";
            } else if ($konversi_d_pend_formal == "S2") {
                $konversi_d_pend_formal = "3";
            } else if ($konversi_d_pend_formal == "S3") {
                $konversi_d_pend_formal = "4";
            }

            if ($konversi_d_pend_nonformal == "Tidak Ada") {
                $konversi_d_pend_nonformal = "1";
            } else if ($konversi_d_pend_nonformal == "Ada") {
                $konversi_d_pend_nonformal = "2";
            }

            if ($konversi_d_usia == "31-35 Tahun") {
                $konversi_d_usia = "0";
            } else if ($konversi_d_usia == "25-30 Tahun") {
                $konversi_d_usia = "2";
            } else if ($konversi_d_usia == "18-24 Tahun") {
                $konversi_d_usia = "1";
            }

            if ($konversi_d_lama_kerja == "0 Bulan") {
                $konversi_d_lama_kerja = "1";
            } else if ($konversi_d_lama_kerja == "1-6 Bulan") {
                $konversi_d_lama_kerja = "2";
            } else if ($konversi_d_lama_kerja == "7-12 Bulan") {
                $konversi_d_lama_kerja = "3";
            } else if ($konversi_d_lama_kerja == "13-18 Bulan") {
                $konversi_d_lama_kerja = "4";
            } else if ($konversi_d_lama_kerja == "19-24 Bulan") {
                $konversi_d_lama_kerja = "5";
            }

            if ($konversi_d_sim == "A") {
                $konversi_d_sim = "1";
            } else if ($konversi_d_sim == "B1") {
                $konversi_d_sim = "3";
            } else if ($konversi_d_sim == "B2") {
                $konversi_d_sim = "4";
            } else if ($konversi_d_sim == "C") {
                $konversi_d_sim = "2";
            }

            //Array (Simpan Data) DRIVER
            $dataDriver = [
                'id' => $req->input('id'),
                'id_pelamar' => $pelamar->id,
                'pend_formal' => $konversi_d_pend_formal,
                'pend_nonformal' => $konversi_d_pend_nonformal,
                'usia' => $req->$konversi_d_usia,
                'lama_kerja' => $konversi_d_lama_kerja,
                'sim' => $konversi_d_sim,
                'jarak_c1' => $req->input('jarak_c1'),
                'jarak_c2' => $req->input('jarak_c2'),
                'iterasi' => $req->input('iterasi'),
            ];


            // Konversi Perhitungan ADMIN
            $konversi_a_pend_formal = $req->input('pend_formal');
            $konversi_a_pend_nonformal = $req->input('pend_nonformal');
            $konversi_a_usia = $req->input('usia');
            $konversi_a_lama_kerja = $req->input('lama_kerja');
            $konversi_a_komp = $req->input('komp');

            //Kondisi ADMIN
            if ($konversi_a_pend_formal == "SLTA") {
                $konversi_a_pend_formal = "0";
            } else if ($konversi_a_pend_formal == "D3") {
                $konversi_a_pend_formal = "1";
            } else if ($konversi_a_pend_formal == "S1") {
                $konversi_a_pend_formal = "2";
            } else if ($konversi_a_pend_formal == "S2") {
                $konversi_a_pend_formal = "3";
            } else if ($konversi_a_pend_formal == "S3") {
                $konversi_a_pend_formal = "4";
            }

            if ($konversi_a_pend_nonformal == "Tidak Ada") {
                $konversi_a_pend_nonformal = "1";
            } else if ($konversi_a_pend_nonformal == "Ada") {
                $konversi_a_pend_nonformal = "2";
            }

            if ($konversi_a_usia == "31-35 Tahun") {
                $konversi_a_usia = "0";
            } else if ($konversi_a_usia == "25-30 Tahun") {
                $konversi_a_usia = "2";
            } else if ($konversi_a_usia == "18-24 Tahun") {
                $konversi_a_usia = "1";
            }

            if ($konversi_a_lama_kerja == "0 Bulan") {
                $konversi_a_lama_kerja = "1";
            } else if ($konversi_a_lama_kerja == "1-6 Bulan") {
                $konversi_a_lama_kerja = "2";
            } else if ($konversi_a_lama_kerja == "7-12 Bulan") {
                $konversi_a_lama_kerja = "3";
            } else if ($konversi_a_lama_kerja == "13-18 Bulan") {
                $konversi_a_lama_kerja = "4";
            } else if ($konversi_a_lama_kerja == "19-24 Bulan") {
                $konversi_a_lama_kerja = "5";
            }

            if ($konversi_a_komp == "Tidak Ada") {
                $konversi_a_komp = "1";
            } else if ($konversi_a_komp == "Ada") {
                $konversi_a_komp = "2";
            }

            //Array (Simpan Data) ADMIN
            $dataAdmin = [
                'id' => $req->input('id'),
                // 'id_pelamar' => $pelamar->('id'),
                'id_pelamar' => $pelamar->id,
                'pend_formal' => $konversi_a_pend_formal,
                'pend_nonformal' => $konversi_a_pend_nonformal,
                'usia' => $konversi_a_usia,
                'lama_kerja' => $konversi_a_lama_kerja,
                'komp' => $konversi_a_komp,
                'jarak_c1' => $req->input('jarak_c1'),
                'jarak_c2' => $req->input('jarak_c2'),
                'iterasi' => $req->input('iterasi'),
            ];

            if ($req->jabatan_lamaran == 'Satpam') {
                Satpam::create($dataSatpam);
            } elseif ($req->jabatan_lamaran == 'CleaningService') {
                CleaningService::create($dataCleaningService);
            } elseif ($req->jabatan_lamaran == 'Administrasi') {
                Admin::create($dataAdmin);
            } elseif (($req->jabatan_lamaran == 'Driver')) {
                Driver::create($dataDriver);
            } elseif ($req->jabatan_lamaran == 'Teknisi') {
                Teknisi::create($dataTeknisi);
            } elseif ($req->jabatan_lamaran == 'Helper') {
                Helper::create($dataHelper);
            } elseif (($req->jabatan_lamaran == 'Operator')) {
                Operator::create($dataOperator);
            }

            flash()->addSuccess('Anda berhasil mengajukan lamaran.');

            return redirect('User');
        } catch (Exception $e) {

            flash()->addError('Terjadi kesalahan saat membuat pelamar.' . $e->getMessage());

            return redirect()->back();
        }
    }
}


    //         $notyf = new notyf();
    //         $notyf()
    //             ->duration(8000)
    //             ->dismissible(true)
    //             ->ripple(true)
    //             ->addSuccess('Anda berhasil mengajukan lamaran.');
    //     } catch (Exception $e) {
    //         $notyf()
    //             ->duration(8000)
    //             ->dismissible(true)
    //             ->ripple(true)
    //             ->addError($e->getMessage());
    //     }
    //     return redirect()->route('User');
    // }
