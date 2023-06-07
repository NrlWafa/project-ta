@extends('admin.layout')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Data Pelamar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>

            <div class="card-body">
                <div class="form-group">
                    <label>ID Pelamar</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Panggilan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Status Perkawinan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat KTP</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat Domisili</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Kabupaten/Kota</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor Handphone</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor Telp Rumah</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor KTP</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tinggi Badan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Ukuran Baju</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Ukuran Celana</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Ukuran Sepatu</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>E-Mail</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <!-- /.card-body -->

                {{-- DATA PASANGAN --}}
                <label>DATA PASANGAN HANYA UNTUK YANG SUDAH MENIKAH 'SUAMI/ISTRI'</label>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor Handphone</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Anak Ke-1</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Anak Ke-2</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Anak Ke-3</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA ORANG TUA (AYAH) --}}
                <label>DATA ORANG TUA</label>

                <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir Ayah</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir Ayah</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ayah</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap Ayah</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor Handphone Ayah</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA ORANG TUA (IBU) --}}
                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir Ibu</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir Ibu</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ibu</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap Ibu</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor Handphone Ibu</label>
                    <input type="text" class="form-control" readonly>
                </div>


                {{-- DATA PRIBADI --}}
                <label>DATA PELAMAR</label>
                <div class="form-group">
                    <label>Golongan Darah</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA PENDIDIKAN FORMAL --}}
                <label>DATA PENDIDIKAN FORMAL</label>

                <div class="form-group">
                    <label>Pendidikan Formal</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Pendidikan Formal</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tahun Pendidkan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Jurusan Pendidikan</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA PENDIDIKAN NON FORMAL --}}
                <label>DATA PENDIDIKAN NON FORMAL</label>
                <div class="form-group">
                    <label>Pendidikan Non Formal</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tempat Pendidikan Non Formal</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tahun Pendidkan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Jurusan Pendidikan</label>
                    <input type="text" class="form-control" readonly>
                </div>


                {{-- DATA PEKERJAAN --}}
                <label>DATA RIWAYAT PEKERJAAN</label>
                <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Bidang Usaha</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Tahun Masuk</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Alasan Keluar</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA RIWAYAT PENYAKIT --}}
                <div class="form-group">
                    <label>Riwayat Penyakit</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Pernah Dirawat di Rumah Sakit</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Lama Dirawat</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA PRIBADI --}}
                <div class="form-group">
                    <label>Bahasa yang Dikuasai</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Organisasi</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA KONTAK --}}
                <div class="form-group">
                    <label>Nama Kontak</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor Handphone Kontak</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Hubungan Kekeluargaan Dengan Kontak</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA PRIBADI --}}
                <div class="form-group">
                    <label>Nomor NPWP</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor BPJS Ketenagakerjaan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>BPJS Kesehatan</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Jabatan yang Dilamar</label>
                    <input type="text" class="form-control" readonly>
                </div>

                {{-- DATA FOTO FOTO --}}
                <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card -->
    <div class="card-footer">
        <a href="admin" class="btn btn-danger">Kembali</a>
    </div>
    </div>
    </div>

    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4 class="card-title">Ekko Lightbox</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox"
                            data-title="sample 1 - white" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2"
                                alt="white sample" />
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox"
                            data-title="sample 2 - white" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2"
                                alt="white sample" />
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox"
                            data-title="sample 3 - white" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2"
                                alt="white sample" />
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox"
                            data-title="sample 4 - white" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2"
                                alt="white sample" />
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox"
                            data-title="sample 5 - white" data-gallery="gallery">
                            <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2"
                                alt="white sample" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
