@extends('user.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Pendaftaran</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form method="POST" action={{ url('user/store') }} enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger text-center text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap*</label>
                            <input type="text" class="form-control" value="{{ old('nama_lengkap') }}" name="nama_lengkap"
                                placeholder="Masukkan Nama Lengkap">

                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan*</label>
                            <input type="text" class="form-control" value="{{ old('nama_panggilan') }}"
                                name="nama_panggilan" placeholder="Masukkan Nama Panggilan">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin*</label>
                            <select class="custom-select rounded-0" name="jenis_kelamin">
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('tempat_lahir') }}"
                                    name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir*</label>
                            <div class="input-group">
                                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                    class="form-control" data-inputmask-alias="datetime"
                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Usia Saat Mengajukan Lamaran*</label>
                            <select class="custom-select rounded-0" name="usia">
                                <option value="" selected disabled>Pilih Usia</option>
                                <option>18-24 Tahun</option>
                                <option>25-30 Tahun</option>
                                <option>31-35 Tahun</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan*</label>
                            <select class="custom-select rounded-0" name="status_perkawinan">
                                <option value="" selected disabled>Pilih Status Perkawinan</option>
                                <option>Belum Kawin</option>
                                <option>Kawin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama*</label>
                            <select class="custom-select rounded-0" name="agama">
                                <option value="" selected disabled>Pilih Agama</option>
                                <option>Islam</option>
                                <option>Kristen/Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Kong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat KTP*</label>
                            <input type="text" class="form-control" name="alamat_ktp" value="{{ old('alamat_ktp') }}"
                                placeholder="Masukkan Alamat Sesuai KTP">
                        </div>
                        <div class="form-group">
                            <label>Alamat Domisili*</label>
                            <input type="text" class="form-control" name="alamat_dom" value="{{ old('alamat_dom') }}"
                                placeholder="Masukkan Alamat Domisili">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan*</label>
                            <input type="text" class="form-control" name="kel" value="{{ old('kel') }}"
                                placeholder="Masukkan Kelurahan">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan*</label>
                            <input type="text" class="form-control" name="kec" value="{{ old('kec') }}"
                                placeholder="Masukkan Kecamatan">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota*</label>
                            <input type="text" class="form-control" name="kab_kota" value="{{ old('kab_kota') }}"
                                placeholder="Masukkan Kabupaten/Kota">
                        </div>
                        <div class="form-group">
                            <label>Provinsi*</label>
                            <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi') }}"
                                placeholder="Masukkan Provinsi">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handphone*</label>
                            <input type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}"
                                placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telp Rumah</label>
                            <input type="number" class="form-control" name="no_telprumah"
                                value="{{ old('no_telprumah') }}" placeholder="Masukkan Nomor Telp Rumah">
                        </div>
                        <div class="form-group">
                            <label>Nomor KTP*</label>
                            <input type="number" class="form-control" name="no_ktp" value="{{ old('no_ktp') }}"
                                placeholder="Masukkan Nomor KTP">
                        </div>
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <select class="custom-select rounded-0" name="gol_dar">
                                <option value="" selected disabled>Pilih Golongan Darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                    </div>
            </div>

            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Khusus formasi pekerjaan untuk Satpam wajib diisi</strong>
                </div>
                <div class="card-body">
                    {{-- PERHITUNGAN --}}
                    <div class="form-group">
                        <label>Pendidikan Satpam</label>
                        <select class="custom-select rounded-0" name="satpam">
                            <option value="" selected disabled>Pilih Pendidikan</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Gada Pratama">Gada Pratama</option>
                            <option value="Gada Madya">Gada Madya</option>
                            <option value="Gada Utama">Gada Utama</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <select class="custom-select rounded-0" name="tinggi_badan">
                            <option value="" selected disabled>Pilih Tinggi Badan</option>
                            <option value="Kurang Dari 160 Cm">Kurang Dari 160 Cm</option>
                            <option value="160-185 Cm">160-185 Cm</option>
                            <option value="Lebih Dari 185 Cm">Lebih Dari 185 Cm</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="number" class="form-control" name="berat_badan" value="{{ old('berat_badan') }}"
                            placeholder="Masukkan Berat Badan ...Cm">
                    </div>
                    <div class="form-group">
                        <label>Ukuran Baju</label>
                        <select class="custom-select rounded-0" name="uk_baju">
                            <option value="" selected disabled>Pilih Ukuran</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="3XL">3XL</option>
                            <option value="4XL">4XL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ukuran Celana</label>
                        <input type="number" class="form-control" name="uk_celana" value="{{ old('uk_celana') }}"
                            placeholder="Masukkan Ukuran Celana '27,28,..dst'">
                    </div>
                    <div class="form-group">
                        <label>Ukuran Sepatu</label>
                        <input type="number" class="form-control" name="uk_sepatu" value="{{ old('uk_sepatu') }}"
                            placeholder="Masukkan Ukuran Sepatu 'Khusus Satpam'">
                    </div>
                </div>
            </div>


            {{-- PERHITUNGAN --}}
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Khusus formasi pekerjaan untuk Driver wajib diisi</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>SIM</label>
                        <select class="custom-select rounded-0" name="sim">
                            <option value="" selected disabled>Pilih</option>
                            <option value="A">A</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Khusus formasi pekerjaan untuk Admin, Operator, Helper dan Teknisis wajib diisi</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Mampu Mengoperasikan Komputer 'MS Office'</label>
                        <select class="custom-select rounded-0" name="komp">
                            <option value="" selected disabled>Pilih</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>


            {{-- DATA PASANGAN --}}
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Data pasangan hanya untuk yang sudah menikah 'Suami/Istri'</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_pasangan"
                            value="{{ old('nama_pasangan') }}" placeholder="Masukkan Nama Pasangan">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" name="status_psg" value="{{ old('status_psg') }}"
                            placeholder="Masukkan Status Pasangan">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmp_lahir_psg"
                            value="{{ old('tmp_lahir_psg') }}" placeholder="Masukkan Tempat Lahir Pasangan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div class="input-group">
                            <input type="date" name="tgl_lahir_psg" value="{{ old('tgl_lahir_psg') }}"
                                class="form-control" data-inputmask-alias="datetime"
                                data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan_psg"
                            value="{{ old('pekerjaan_psg') }}" placeholder="Masukkan Pekerjaan Pasangan">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat_psg" value="{{ old('alamat_psg') }}"
                            placeholder="Masukkan Alamat Lengkap Pasangan">
                    </div>
                    <div class="form-group">
                        <label>Nomor Handhpone</label>
                        <input type="number" class="form-control" name="no_hp_psg" value="{{ old('no_hp_psg') }}"
                            placeholder="Masukkan Nomor Handhpone Pasangan">
                    </div>
                    <div class="form-group">
                        <label>Nama Anak</label>
                        <input type="text" class="form-control" name="anak1" value="{{ old('anak1') }}"
                            placeholder="Masukkan Nama Anak Ke-1">
                    </div>
                    <div class="form-group">
                        <label>Nama Anak</label>
                        <input type="text" class="form-control" name="anak2" value="{{ old('anak2') }}"
                            placeholder="Masukkan Nama Anak Ke-2">
                    </div>
                    <div class="form-group">
                        <label>Nama Anak</label>
                        <input type="text" class="form-control" name="anak3" value="{{ old('anak3') }}"
                            placeholder="Masukkan Nama Anak Ke-3">
                    </div>
                </div>
            </div>


            {{-- DATA ORANG TUA (AYAH) --}}
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Data Orang Tua*</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Ayah*</label>
                        <input type="text" class="form-control" name="nama_ayh" value="{{ old('nama_ayh') }}"
                            placeholder="Masukkan Nama Lengkap Ayah">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir Ayah*</label>
                        <input type="text" class="form-control" name="tmp_lahir_ayh"
                            value="{{ old('tmp_lahir_ayh') }}" placeholder="Masukkan Tempat Lahir Ayah">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Ayah*</label>
                        <div class="input-group">
                            <input type="date" name="tgl_lahir_ayh" value="{{ old('tgl_lahir_ayh') }}"
                                class="form-control" data-inputmask-alias="datetime"
                                data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Ayah*</label>
                        <input type="text" class="form-control" name="pekerjaan_ayh"
                            value="{{ old('pekerjaan_ayh') }}" placeholder="Masukkan Pekerjaan Ayah">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap Ayah*</label>
                        <input type="text" class="form-control" name="alamat_ayh" value="{{ old('alamat_ayh') }}"
                            placeholder="Masukkan Alamat Lengkap Ayah">
                    </div>
                    <div class="form-group">
                        <label>Nomor Handhpone Ayah</label>
                        <input type="number" class="form-control" name="no_hp_ayh" value="{{ old('no_hp_ayh') }}"
                            placeholder="Masukkan Nomor Handhpone Ayah">
                    </div>

                    {{-- DATA ORANG TUA (IBU) --}}
                    <div class="form-group">
                        <label>Nama Ibu*</label>
                        <input type="text" class="form-control" name="nama_ibu" value="{{ old('nama_ibu') }}"
                            placeholder="Masukkan Nama Lengkap Ibu">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir Ibu*</label>
                        <input type="text" class="form-control" name="tmp_lahir_ibu"
                            value="{{ old('tmp_lahir_ibu') }}" placeholder="Masukkan Tempat Lahir Ibu">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Ibu*</label>
                        <div class="input-group">
                            <input type="date" name="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu') }}"
                                class="form-control" data-inputmask-alias="datetime"
                                data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Ibu*</label>
                        <input type="text" class="form-control" name="pekerjaan_ibu"
                            value="{{ old('pekerjaan_ibu') }}" placeholder="Masukkan Pekerjaan Ibu">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap Ibu*</label>
                        <input type="text" class="form-control" name="alamat_ibu" value="{{ old('alamat_ibu') }}"
                            placeholder="Masukkan Alamat Lengkap Ibu">
                    </div>
                    <div class="form-group">
                        <label>Nomor Handhpone Ibu</label>
                        <input type="number" class="form-control" name="no_hp_ibu" value="{{ old('no_hp_ibu') }}"
                            placeholder="Masukkan Nomor Handhpone Ibu">
                    </div>
                </div>
            </div>

            {{-- DATA PENDIDIKAN FORMAL --}}
            {{-- PERHITUNGAN --}}
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Riwayat Pendidikan Formal</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Pendidikan Formal*</label>
                        <select class="custom-select rounded-0" name="pend_formal">
                            <option value="" selected disabled>Pilih Pendidikan Formal</option>
                            <option>SLTA</option>
                            <option>D3</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tempat Pendidikan Formal*</label>
                        <input type="text" class="form-control" name="tmp_pend" value="{{ old('tmp_pend') }}"
                            placeholder="Masukkan Tempat Pendidikan Formal 'SMA Negeri 1 Banjarmasin'">
                    </div>
                    <div class="form-group">
                        <label>Tahun Pendidikan*</label>
                        <input type="number" class="form-control" name="thn_pend" value="{{ old('thn_pend') }}"
                            placeholder="Masukkan Tahun Pendidikan Formal">
                    </div>

                    <div class="form-group">
                        <label>Jurusan Pendidikan*</label>
                        <input type="text" class="form-control" name="jurusan_pend"
                            value="{{ old('jurusan_pend') }}" placeholder="Masukkan Jurusan Pendidikan Formal">
                    </div>
                </div>
            </div>


            {{-- DATA PENDIDIKAN NON FORMAL --}}
            {{-- PERHITUNGAN --}}
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Riwayat Pendidikan Non Formal</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Pendidikan Non Formal*</label>
                        <select class="custom-select rounded-0" name="pend_nonformal">
                            <option value="" selected disabled>Pilih</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tempat Pendidikan Non Formal</label>
                        <input type="text" class="form-control" name="tmp_pend_non"
                            value="{{ old('tmp_pend_non') }}"
                            placeholder="Masukkan Tempat Pendidikan Non Formal 'Lembaga Kursus Citra Banua'">
                    </div>
                    <div class="form-group">
                        <label>Tahun Pendidikan</label>
                        <input type="number" class="form-control" name="thn_pend_non"
                            value="{{ old('thn_pend_non') }}" placeholder="Masukkan Tahun Pendidikan Non Formal">
                    </div>

                    <div class="form-group">
                        <label>Jurusan Pendidikan</label>
                        <input type="text" class="form-control" name="jurusan_pend_non"
                            value="{{ old('jurusan_pend_non') }}" placeholder="Masukkan Jurusan Pendidikan Non Formal">
                    </div>
                    <div class="form-group">
                        <label for="bukti_pend_non">Upload Bukti Pendidikan Non Formal</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="bukti_pend_non"
                                    id="bukti_pend_non" onchange="showSelectedFoto(event, 'bukti_pend_non_preview')">
                                <label class="custom-file-label" for="bukti_pend_no">Pilih Foto</label>
                            </div>
                        </div>
                        <img id="bukti_pend_non_preview" src="#" alt=""
                            style="max-width: 200px; max-height: 200px;">
                    </div>
                </div>
            </div>



            {{-- DATA PEKERJAAN --}}
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Disi jika memiliki riwayat Pekerjaan sesuai dengan lamaran yang diidaftar</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan"
                            value="{{ old('nama_perusahaan') }}" placeholder="Masukkan Nama Perusahaan">
                    </div>
                    <div class="form-group">
                        <label>Bidang Usaha</label>
                        <input type="text" class="form-control" name="bidang_usaha"
                            value="{{ old('bidang_usaha') }}" placeholder="Masukkan Bidang Usaha">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}"
                            placeholder="Masukkan Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk</label>
                        <input type="number" class="form-control" name="tahun_masuk" value="{{ old('tahun_masuk') }}"
                            placeholder="Masukkan Tahun Masuk">
                    </div>
                    <div class="form-group">
                        <label>Alasan Keluar</label>
                        <input type="text" class="form-control" name="alasan_keluar"
                            value="{{ old('alasan_keluar') }}" placeholder="Masukkan Alasan Keluar">
                    </div>
                    {{-- PERHITUNGAN --}}
                    <div class="form-group">
                        <label>Pengalaman Kerja*</label>
                        <select class="custom-select rounded-0" name="lama_kerja">
                            <option value="" selected disabled>Pilih jika Pengalaman Kerja selaras dengan
                                jabatan
                                yang ingin
                                dilamar</option>
                            <option value="0 Bulan">0 Bulan</option>
                            <option value="1-6 Bulan">1-6 Bulan</option>
                            <option value="7-12 Bulan">7-12 Bulan</option>
                            <option value="13-18 Bulan">13-18 Bulan</option>
                            <option value="19-24 Bulan">19-24 Bulan</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- DATA RIWAYAT PENYAKIT --}}
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label>Riwayat Penyakit</label>
                        <input type="text" class="form-control" name="riwayat_penyakit"
                            value="{{ old('riwayat_penyakit') }}"
                            placeholder="Masukkan Riwayat Penyakit yang Pernah diderita">
                    </div>
                    <div class="form-group">
                        {{-- PADA DATABASE NAMANYA RS --}}
                        <label>Pernah di rawat di Rumah Sakit*</label>
                        <select class="custom-select rounded-0" name="rs">
                            <option value="" selected disabled>Pilih</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lama Dirawat</label>
                        <input type="text" class="form-control" name="lama_dirawat"
                            value="{{ old('lama_dirawat') }}" placeholder="Berapa Lama Pernah Dirawat">
                    </div>
                </div>
            </div>

            {{-- DATA KONTAK --}}
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <strong>Kontak keluarga yang bisa dihubungi</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Kontak*</label>
                        <input type="text" class="form-control" name="nm_kontak" value="{{ old('nm_kontak') }}"
                            placeholder="Masukkan Nama Kontak yang Bisa Dihubungi dalam Keadaan Tertentu">
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone Kontak*</label>
                        <input type="number" class="form-control" name="no_kontak" value="{{ old('no_kontak') }}"
                            placeholder="Masukkan Nomor Handphone">
                    </div>
                    <div class="form-group">
                        <label>Hubungan 'Kekeluargaan Dengan Kontak'*</label>
                        <input type="text" class="form-control" name="hubungan" value="{{ old('hubungan') }}"
                            placeholder="Hubungan Anda Dengan Kentak Sebagai">
                    </div>
                </div>
            </div>


            {{-- DATA PRIBADI --}}
            <div class="card card-primary">
                <div class="card-body">
                    <div class="form-group">
                        <label>Bahasa yang DiKuasai</label>
                        <input type="text" class="form-control" name="bahasa_dikuasai"
                            value="{{ old('bahasa_dikuasai') }}" placeholder="Masukkan Bahasa yang Anda Kuasai">
                    </div>
                    <div class="form-group">
                        <label>Organisasi</label>
                        <input type="text" class="form-control" name="organisasi" value="{{ old('organisasi') }}"
                            placeholder="Masukkan Organisasi yang Pernah Diikuti">
                    </div>
                    <div class="form-group">
                        <label>Nomor NPWP</label>
                        <input type="number" class="form-control" name="no_npwp" value="{{ old('no_npwp') }}"
                            placeholder="Masukkan Nomor NPWP">
                    </div>
                    <div class="form-group">
                        <label>Nomor BPJS Ketenagakerjaan</label>
                        <input type="number" class="form-control" name="no_bpjs_ket" value="{{ old('no_bpjs_ket') }}"
                            placeholder="Masukkan Nomor BPJS Ketenaga Kerjaan">
                    </div>
                    <div class="form-group">
                        <label>Nomor BPJS Kesehatan</label>
                        <input type="number" class="form-control" name="no_bpjs_kes" value="{{ old('no_bpjs_kes') }}"
                            placeholder="Masukkan Nomor BPJS Kesehatan">
                    </div>
                    <div class="form-group">
                        <label>Jabatan yang Dilamar*</label>
                        <select class="custom-select rounded-0" name="jabatan_lamaran">
                            <option value="" selected disabled>Pilih Jabatan</option>
                            <option>Satpam</option>
                            <option>CleaningService</option>
                            <option>Administrasi</option>
                            <option>Driver</option>
                            <option>Teknisi</option>
                            <option>Helper</option>
                            <option>Operator</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="foto_kk">Foto Kartu Keluarga*</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_kk" id="foto_kk"
                                    onchange="showSelectedFoto(event, 'foto_kk_preview')">
                                <label class="custom-file-label">Pilih Foto</label>
                            </div>
                        </div>
                        <img id="foto_kk_preview" src="#" alt=""
                            style="max-width: 200px; max-height: 200px;">
                    </div>

                    <div class="form-group">
                        <label for="foto_kta">Foto Kartu Tanda Anggota</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_kta" id="foto_kta"
                                    onchange="showSelectedFoto(event, 'foto_kta_preview')">
                                <label class="custom-file-label">Pilih Foto</label>
                            </div>
                        </div>
                        <img id="foto_kta_preview" src="#" alt=""
                            style="max-width: 200px; max-height: 200px;">
                    </div>

                    <div class="form-group">
                        <label for="foto_npwp">Foto NPWP</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_npwp" id="foto_npwp"
                                    onchange="showSelectedFoto(event, 'foto_npwp_preview')">
                                <label class="custom-file-label">Pilih Foto</label>
                            </div>
                        </div>
                        <img id="foto_npwp_preview" src="#" alt=""
                            style="max-width: 200px; max-height: 200px;">
                    </div>

                    <div class="form-group">
                        <label for="pas_foto">Pas Foto*</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="pas_foto" id="pas_foto"
                                    onchange="showSelectedFoto(event, 'pas_foto_preview')">
                                <label class="custom-file-label">Pilih Foto</label>
                            </div>
                        </div>
                        <img id="pas_foto_preview" src="#" alt=""
                            style="max-width: 200px; max-height: 200px;">
                    </div>

                    <div class="form-group">
                        <label for="foto_ktp">Foto KTP*</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_ktp" id="foto_ktp"
                                    onchange="showSelectedFoto(event, 'foto_ktp_preview')">
                                <label class="custom-file-label" for="foto_ktp">Pilih Foto</label>
                            </div>
                        </div>
                        <img id="foto_ktp_preview" src="#" alt=""
                            style="max-width: 200px; max-height: 200px;">
                    </div>
                    <!-- Tambahkan kode script JavaScript berikut -->
                    <script>
                        function showSelectedFoto(event, previewId) {
                            const input = event.target;
                            if (input.files && input.files[0]) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    const preview = document.getElementById(previewId);
                                    preview.setAttribute('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>

                    <p><strong>
                            Perhatikan Data yang Disi! </strong></p>

                    <p> Kami ingin mengingatkan Anda untuk sangat berhati-hati dan memperhatikan data yang Anda
                        masukkan.
                        Mengingat
                        bahwa Anda hanya diberikan satu kesempatan untuk memasukkan data. </p>
                    <p>Sebelum mengirimkan data Anda, pastikan untuk melakukan
                        pengecekan menyeluruh. Periksa setiap
                        detail yang Anda masukkan dan pastikan semuanya akurat dan lengkap.</p>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" id="save">Simpan</button>

                    <a href="User" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </div>
        </form>

    </div>
    <!-- /.card -->
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js"
        integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Loties --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js"></script>
    <script>
        // var slideSource = document.getElementById('slideSource');

        document.getElementById('save').onclick = function() {
            Swal.fire({
                position: 'center',
                imageUrl: 'https://unsplash.it/400/200',
                imageWidth: 400,
                imageHeight: 200,
                title: 'Data berhasil tersimpan',
                showConfirmButton: false,
                timer: 2000
            })
        }
    </script>
@endsection
