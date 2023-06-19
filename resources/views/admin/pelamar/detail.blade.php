@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail Data Pelamar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <div class="card-body">
                    <div class="form-group">
                        <label>ID Pelamar</label>
                        <input type="text" class="form-control" value="{{ $pelamar->id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" value="{{ $pelamar->nama_lengkap }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Panggilan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->nama_panggilan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" value="{{ $pelamar->jenis_kelamin }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tempat_lahir }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tanggal_lahir }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Status Perkawinan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->status_perkawinan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" value="{{ $pelamar->agama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat KTP</label>
                        <input type="text" class="form-control" value="{{ $pelamar->alamat_ktp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat Domisili</label>
                        <input type="text" class="form-control" value="{{ $pelamar->alamat_dom }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Kelurahan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->kel }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->kec }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Kabupaten/Kota</label>
                        <input type="text" class="form-control" value="{{ $pelamar->kab_kota }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" value="{{ $pelamar->provinsi }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_hp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telp Rumah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_telprumah }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor KTP</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_ktp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tinggi_badan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Berat Badan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->berat_badan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Ukuran Baju</label>
                        <input type="text" class="form-control" value="{{ $pelamar->uk_baju }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Ukuran Celana</label>
                        <input type="text" class="form-control" value="{{ $pelamar->uk_celana }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Ukuran Sepatu</label>
                        <input type="text" class="form-control" value="{{ $pelamar->uk_sepatu }}" readonly>
                    </div>





                    {{-- DATA PASANGAN --}}
                    <label>DATA PASANGAN HANYA UNTUK YANG SUDAH MENIKAH 'SUAMI/ISTRI'</label>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="{{ $pelamar->nama_pasangan }}"readonly>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" value="{{ $pelamar->status_psg }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tmp_lahir_psg }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tgl_lahir_psg }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->pekerjaan_psg }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" class="form-control" value="{{ $pelamar->alamat_psg }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_hp_psg }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Anak Ke-1</label>
                        <input type="text" class="form-control" value="{{ $pelamar->anak1 }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Anak Ke-2</label>
                        <input type="text" class="form-control" value="{{ $pelamar->anak2 }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Anak Ke-3</label>
                        <input type="text" class="form-control" value="{{ $pelamar->anak3 }}" readonly>
                    </div>

                    {{-- DATA ORANG TUA (AYAH) --}}
                    <label>DATA ORANG TUA</label>

                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->nama_ayh }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir Ayah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tmp_lahir_ayh }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Ayah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tgl_lahir_ayh }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Ayah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->pekerjaan_ayh }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap Ayah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->alamat_ayh }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone Ayah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_hp_ayh }}" readonly>
                    </div>

                    {{-- DATA ORANG TUA (IBU) --}}
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" class="form-control" value="{{ $pelamar->nama_ibu }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir Ibu</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tmp_lahir_ibu }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir Ibu</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tgl_lahir_ibu }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Ibu</label>
                        <input type="text" class="form-control" value="{{ $pelamar->pekerjaan_ibu }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap Ibu</label>
                        <input type="text" class="form-control" value="{{ $pelamar->alamat_ibu }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone Ibu</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_hp_ibu }}" readonly>
                    </div>


                    {{-- DATA PRIBADI --}}
                    <label>DATA PELAMAR</label>
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->gol_dar }}" readonly>
                    </div>

                    {{-- DATA PENDIDIKAN FORMAL --}}
                    <label>DATA PENDIDIKAN FORMAL</label>

                    <div class="form-group">
                        <label>Pendidikan Formal</label>
                        <input type="text" class="form-control" value="{{ $pelamar->pend_formal }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat Pendidikan Formal</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tmp_pend }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tahun Pendidkan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->thn_pend }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jurusan Pendidikan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->jurusan_pend }}" readonly>
                    </div>

                    {{-- DATA PENDIDIKAN NON FORMAL --}}
                    <label>DATA PENDIDIKAN NON FORMAL</label>
                    <div class="form-group">
                        <label>Pendidikan Non Formal</label>
                        <input type="text" class="form-control" value="{{ $pelamar->pend_nonformal }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat Pendidikan Non Formal</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tmp_pend_non }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tahun Pendidkan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->thn_pend_non }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jurusan Pendidikan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->jurusan_pend_non }}" readonly>
                    </div>


                    {{-- DATA PEKERJAAN --}}
                    <label>DATA RIWAYAT PEKERJAAN</label>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->nama_perusahaan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Bidang Usaha</label>
                        <input type="text" class="form-control" value="{{ $pelamar->bidang_usaha }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->jabatan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk</label>
                        <input type="text" class="form-control" value="{{ $pelamar->tahun_masuk }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alasan Keluar</label>
                        <input type="text" class="form-control" value="{{ $pelamar->alasan_keluar }}" readonly>
                    </div>

                    {{-- DATA RIWAYAT PENYAKIT --}}
                    <div class="form-group">
                        <label>Riwayat Penyakit</label>
                        <input type="text" class="form-control" value="{{ $pelamar->riwayat_penyakit }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Pernah Dirawat di Rumah Sakit</label>
                        <input type="text" class="form-control" value="{{ $pelamar->rs }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Lama Dirawat</label>
                        <input type="text" class="form-control" value="{{ $pelamar->lama_dirawat }}" readonly>
                    </div>

                    {{-- DATA PRIBADI --}}
                    <div class="form-group">
                        <label>Bahasa yang Dikuasai</label>
                        <input type="text" class="form-control" value="{{ $pelamar->bahasa_dikuasai }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Organisasi</label>
                        <input type="text" class="form-control" value="{{ $pelamar->organisasi }}" readonly>
                    </div>

                    {{-- DATA KONTAK --}}
                    <label>Kontak Keluarga yang Bisa Dihubungi</label>
                    <div class="form-group">
                        <label>Nama Kontak</label>
                        <input type="text" class="form-control" value="{{ $pelamar->nm_kontak }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone Kontak</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_kontak }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Hubungan Kekeluargaan Dengan Kontak</label>
                        <input type="text" class="form-control" value="{{ $pelamar->hubungan }}" readonly>
                    </div>

                    {{-- DATA PRIBADI --}}
                    <div class="form-group">
                        <label>Nomor NPWP</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_npwp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor BPJS Ketenagakerjaan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_bpjs_ket }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>BPJS Kesehatan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_bpjs_kes }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jabatan yang Dilamar</label>
                        <input type="text" class="form-control" value="{{ $pelamar->jabatan_lamaran }}" readonly>
                    </div>


                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>

            {{-- DATA FOTO FOTO --}}
            <div class="row px">
                <div class="col-md-4">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title ">Kartu Keluarga</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <tr>
                                <td>
                                    <img src="{{ asset('foto_kk/' . $pelamar->foto_kk) }}" alt="" height="250px"
                                        width="380px">
                                </td>
                            </tr>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>


                <div class="col-md-4">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title ">KTA</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <tr>
                                <td>
                                    <img src="{{ asset('foto_kta/' . $pelamar->foto_kta) }}" alt=""
                                        height="250px" width="380px">
                                </td>
                            </tr>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-4">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title ">NPWP</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <tr>
                                <td>
                                    <img src="{{ asset('foto_npwp/' . $pelamar->foto_npwp) }}" alt=""
                                        height="250px" width="380px">
                                </td>
                            </tr>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row px">
                <div class="col-md-4">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title ">Pas Foto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <tr>
                                <td>
                                    <img src="{{ asset('pas_foto/' . $pelamar->pas_foto) }}" alt=""
                                        height="250px" width="380px">
                                </td>
                            </tr>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-4">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title ">KTP</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <tr>
                                <td>
                                    <img src="{{ asset('foto_ktp/' . $pelamar->foto_ktp) }}" alt=""
                                        height="250px" width="380px">
                                </td>
                            </tr>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ url('Daftar_Pelamar') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
@endsection
