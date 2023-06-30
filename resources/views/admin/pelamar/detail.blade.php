@extends('admin.layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">


            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail Data Pelamar</h3>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>ID User</label>
                        <input type="text" class="form-control" value="{{ $pelamar->id_user }}" readonly>
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
                        <label>Golongan Darah</label>
                        <input type="text" class="form-control" value="{{ $pelamar->gol_dar }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Bahasa yang Dikuasai</label>
                        <input type="text" class="form-control" value="{{ $pelamar->bahasa_dikuasai }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Organisasi</label>
                        <input type="text" class="form-control" value="{{ $pelamar->organisasi }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor NPWP</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_npwp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor BPJS Ketenagakerjaan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_bpjs_ket }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor BPJS Kesehatan</label>
                        <input type="text" class="form-control" value="{{ $pelamar->no_bpjs_kes }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>SIM</label>
                        <input type="text" class="form-control" value="{{ $pelamar->sim }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Mampu Mengoperasikan Komputer 'MS Office'</label>
                        <input type="text" class="form-control" value="{{ $pelamar->komp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jabatan yang Dilamar</label>
                        <input type="text" class="form-control" value="{{ $pelamar->jabatan_lamaran }}" readonly>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            {{-- DATA SATPAM --}}
            <div class="card">
                <div class="card-header">
                    <strong>Data Pelamar "Satpam"</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pendidikan Satpam</th>
                                <th>Tinggi Badan</th>
                                <th>Berat Badan</th>
                                <th>Ukuran Baju</th>
                                <th>Ukuran Celana</th>
                                <th>Ukuran Sepatu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pelamar->satpam }}</td>
                                <td>{{ $pelamar->tinggi_badan }}</td>
                                <td>{{ $pelamar->berat_badan }}</td>
                                <td>{{ $pelamar->uk_baju }}</td>
                                <td>{{ $pelamar->uk_celana }}</td>
                                <td>{{ $pelamar->uk_sepatu }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- DATA PASANGAN --}}
            <div class="card">
                <div class="card-header">
                    <strong>Data Pasangan</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Pekerjaan</th>
                                <th>Alamat Lengkap</th>
                                <th>Nomor Handphone</th>
                                <th>Nama Anak Ke-1</th>
                                <th>Nama Anak Ke-2</th>
                                <th>Nama Anak Ke-3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pelamar->nama_pasangan }}</td>
                                <td>{{ $pelamar->status_psg }}</td>
                                <td>{{ $pelamar->tmp_lahir_psg }}</td>
                                <td>{{ $pelamar->tgl_lahir_psg }}</td>
                                <td>{{ $pelamar->pekerjaan_psg }}</td>
                                <td>{{ $pelamar->alamat_psg }}</td>
                                <td>{{ $pelamar->no_hp_psg }}</td>
                                <td>{{ $pelamar->anak1 }}</td>
                                <td>{{ $pelamar->anak2 }}</td>
                                <td>{{ $pelamar->anak3 }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- DATA ORANG TUA --}}
            <div class="card">
                <div class="card-header">
                    <strong>Data Orang Tua</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
                                <th>No Handphone</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $pelamar->nama_ayh }}</td>
                                <td>{{ $pelamar->tmp_lahir_ayh }}</td>
                                <td>{{ $pelamar->tgl_lahir_ayh }}</td>
                                <td>{{ $pelamar->pekerjaan_ayh }}</td>
                                <td>{{ $pelamar->alamat_ayh }}</td>
                                <td>{{ $pelamar->no_hp_ayh }}</td>
                            </tr>
                            <tr>
                                <td>{{ $pelamar->nama_ibu }}</td>
                                <td>{{ $pelamar->tmp_lahir_ibu }}</td>
                                <td>{{ $pelamar->tgl_lahir_ibu }}</td>
                                <td>{{ $pelamar->pekerjaan_ibu }}</td>
                                <td>{{ $pelamar->alamat_ibu }}</td>
                                <td>{{ $pelamar->no_hp_ibu }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.card -->

            {{-- RIWAYAT PENDIDIKAN FORMAL --}}
            <div class="card">
                <div class="card-header">
                    <strong>Riwayat Pendidikan Formal</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pendidikan Formal</th>
                                <th>Tempat Pendidikan</th>
                                <th>Tahun Pendidikan</th>
                                <th>Jurusan Pendidikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pelamar->pend_formal }}</td>
                                <td>{{ $pelamar->tmp_pend }}</td>
                                <td>{{ $pelamar->thn_pend }}</td>
                                <td>{{ $pelamar->jurusan_pend }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- RIWAYAT PENDIDIKAN NON FORMAL --}}
            <div class="card">
                <div class="card-header">
                    <strong>Riwayat Pendidikan Non Formal</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pendidikan Non Formal</th>
                                <th>Tempat Pendidikan</th>
                                <th>Tahun Pendidikan</th>
                                <th>Jurusan Pendidikan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pelamar->pend_nonformal }}</td>
                                <td>{{ $pelamar->tmp_pend_non }}</td>
                                <td>{{ $pelamar->thn_pend_non }}</td>
                                <td>{{ $pelamar->jurusan_pend_non }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- RIWAYAT PEKERJAAN --}}
            <div class="card">
                <div class="card-header">
                    <strong>Riwayat Pekerjaan</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Bidang Usaha</th>
                                <th>Jabatan</th>
                                <th>Tahun Masuk</th>
                                <th>Alasan Keluar</th>
                                <th>Pengalaman Kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pelamar->nama_perusahaan }}</td>
                                <td>{{ $pelamar->bidang_usaha }}</td>
                                <td>{{ $pelamar->jabatan }}</td>
                                <td>{{ $pelamar->tahun_masuk }}</td>
                                <td>{{ $pelamar->alasan_keluar }}</td>
                                <td>{{ $pelamar->lama_kerja }}</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- DATA RIWAYAT PENYAKIT --}}
            <div class="card">
                <div class="card-header">
                    <strong>Riwayat Penyakit</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Riwayat Penyakit</th>
                                <th>Pernah Dirawat di Rumah Sakit</th>
                                <th>Lama Dirawat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pelamar->riwayat_penyakit }}</td>
                                <td>{{ $pelamar->rs }}</td>
                                <td>{{ $pelamar->lama_dirawat }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- DATA KONTAK --}}
            <div class="card">
                <div class="card-header">
                    <strong>Kontak Keluarga yang Bisa Dihubungi</strong>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nomor Handphone</th>
                                <th>Hubungan Kekeluargaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pelamar->nm_kontak }}</td>
                                <td>{{ $pelamar->no_kontak }}</td>
                                <td>{{ $pelamar->hubungan }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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

                        <!-- /.card -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title ">Bukti Pendidikan Non Formal</h3>
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
                                    <img src="{{ asset('bukti_pend_non/' . $pelamar->bukti_pend_non) }}" alt=""
                                        height="250px" width="380px">
                                </td>
                            </tr>
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
