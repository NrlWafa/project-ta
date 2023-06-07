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
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Panggilan">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="custom-select rounded-0" name="jk">
                                <option>Pilih Jenis Kelamin</option>
                                <option>Perempuan</option>
                                <option>Laki-laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Masukkan Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <div class="input-group">
                                <input type="date" name="tl" class="form-control" data-inputmask-alias="datetime"
                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select class="custom-select rounded-0" name="jk">
                                <option>Pilih Status Perkawinan</option>
                                <option>Sudah Menikah</option>
                                <option>Belum Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="custom-select rounded-0" name="jk">
                                <option>Pilih Agama</option>
                                <option>Islam</option>
                                <option>Kristen/Protestan</option>
                                <option>Katolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Kong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat KTP</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Alamat Sesuai KTP">
                        </div>
                        <div class="form-group">
                            <label>Alamat Domisili</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Alamat Domisili">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" class="form-control" name="nik" placeholder="Masukkan Kelurahan">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Kecamatan">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Kabupaten/Kota">
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" name="nik" placeholder="Masukkan Provinsi">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhphone</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telp Rumah</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Nomor Telp Rumah">
                        </div>
                        <div class="form-group">
                            <label>Nomor KTP</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nomor KTP">
                        </div>
                        <div class="form-group">
                            <label>Tinggi Badan</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tinggi Badan Cm">
                        </div>
                        <div class="form-group">
                            <label>Berat Badan</label>
                            <input type="text" class="form-control" name="nik" placeholder="Masukkan Berat Badan Kg">
                        </div>
                        <div class="form-group">
                            <label>Ukuran Baju</label>
                            <select class="custom-select rounded-0" name="jk">
                                <option>Pilih Ukuran</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                                <option>3XL</option>
                                <option>4XL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ukuran Celana</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Ukuran Celana '27,28,..dst'">
                        </div>
                        <div class="form-group">
                            <label>Ukuran Sepatu</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Ukuran Sepatu 'Khusus Satpam'">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Email">
                        </div>


                        {{-- DATA PASANGAN --}}
                        <label>DATA PASANGAN HANYA UNTUK YANG SUDAH MENIKAH 'SUAMI/ISTRI'</label>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Status Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tempat Lahir Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <div class="input-group">
                                <input type="date" name="tl" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Pekerjaan Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Alamat Lengkap Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhpone</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nomor Handhpone Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Anak Ke-1">
                        </div>
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Anak Ke-2">
                        </div>
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Anak Ke-3">
                        </div>


                        {{-- DATA ORANG TUA (AYAH) --}}
                        <label>DATA ORANG TUA</label>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Nama Lengkap Ayah">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir Ayah</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tempat Lahir Ayah">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir Ayah</label>
                            <div class="input-group">
                                <input type="date" name="tl" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Pekerjaan Ayah">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap Ayah</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Alamat Lengkap Ayah">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhpone Ayah</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nomor Handhpone Ayah">
                        </div>



                        {{-- DATA ORANG TUA (IBU) --}}
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Nama Lengkap Ibu">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir Ibu</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tempat Lahir Ibu">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir Ibu</label>
                            <div class="input-group">
                                <input type="date" name="tl" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Pekerjaan Ibu">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap Ibu</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Alamat Lengkap Ibu">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhpone Ibu</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nomor Handhpone Ibu">
                        </div>


                        {{-- DATA PRIBADI --}}
                        <label>DATA PELAMAR</label>
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <select class="custom-select rounded-0" name="jk">
                                <option>Pilih Golongan Darah</option>
                                <option>A</option>
                                <option>B</option>
                                <option>AB</option>
                                <option>O</option>
                            </select>
                        </div>

                        {{-- DATA PENDIDIKAN FORMAL --}}
                        <label>DATA PENDIDIKAN FORMAL</label>
                        <div class="form-group">
                            <label>Nama Pendidikan Formal</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Pendidikan Formal">
                        </div>
                        <div class="form-group">
                            <label>Tempat Pendidikan Formal</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tempat Pendidikan Formal">
                        </div>
                        <div class="form-group">
                            <label>Tahun Pendidikan</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tahun Pendidikan Formal">
                        </div>

                        <div class="form-group">
                            <label>Jurusan Pendidikan</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Jurusan Pendidikan Formal">
                        </div>


                        {{-- DATA PENDIDIKAN NON FORMAL --}}
                        <label>DATA PENDIDIKAN NON FORMAL</label>
                        <div class="form-group">
                            <label>Nama Pendidikan Non Formal</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Pendidikan Non Formal">
                        </div>
                        <div class="form-group">
                            <label>Tempat Pendidikan Non Formal</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tempat Pendidikan Non Formal">
                        </div>
                        <div class="form-group">
                            <label>Tahun Pendidikan</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tahun Pendidikan Non Formal">
                        </div>

                        <div class="form-group">
                            <label>Jurusan Pendidikan</label>
                            <input type="text" class="form-control" name="nik"
                                placeholder="Masukkan Jurusan Pendidikan Non Formal">
                        </div>


                        {{-- DATA PEKERJAAN --}}
                        <label>DATA RIWAYAT PEKERJAAN</label>
                        <div class="form-group">
                            {{-- PADA DATABASE BELUM DIGANTI NAMANYA MASIH RIWAYAR_PEKERJAAN --}}
                            <label>Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <label>Bidang Usaha</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Bidang Usaha">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Jabatan">
                        </div>
                        <div class="form-group">
                            <label>Tahun Masuk</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Tahun Masuk">
                        </div>
                        <div class="form-group">
                            <label>Alasan Keluar</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Alasan Keluar">
                        </div>


                        {{-- DATA RIWAYAT PENYAKIT --}}
                        <div class="form-group">
                            <label>Riwayat Penyakit</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Riwayat Penyakit yang Pernah diderita">
                        </div>
                        <div class="form-group">
                            {{-- PADA DATABASE NAMANYA RS --}}
                            <label>Pernah di rawat di Rumah Sakit</label>
                            <select class="custom-select rounded-0" name="jk">
                                <option>Pilih</option>
                                <option>Ya</option>
                                <option>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lama Dirawat</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Berapa Lama Pernah Dirawat">
                        </div>


                        {{-- DATA PRIBADI --}}
                        <div class="form-group">
                            <label>Bahasa yang DiKuasai</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Bahasa yang Anda Kuasai">
                        </div>
                        <div class="form-group">
                            <label>Organisasi</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Organisasi yang Pernah Diikuti">
                        </div>


                        {{-- DATA KONTAK --}}
                        <div class="form-group">
                            <label>Nama Kontak</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nama Kontak yang Bisa Dihubungi dalam Keadaan Tertentu">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handphone Kontak</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="form-group">
                            <label>Hubungan 'Kekeluargaan Dengan Kontak'</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Hubungan Anda Dengan Kentak Sebagai">
                        </div>


                        {{-- DATA PRIBADI --}}
                        <div class="form-group">
                            <label>Nomor NPWP</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nomor NPWP">
                        </div>
                        <div class="form-group">
                            <label>Nomor BPJS Ketenaga Kerjaan</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nomor BPJS Ketenaga Kerjaan">
                        </div>
                        <div class="form-group">
                            <label>Nomor BPJS Kesehatan</label>
                            <input type="text" class="form-control" name="nama"
                                placeholder="Masukkan Nomor BPJS Kesehatan">
                        </div>
                        <div class="form-group">
                            <label>Jabatan yang Dilamar</label>
                            <select class="custom-select rounded-0" name="jk">
                                <option>Pilih Jabatan</option>
                                <option>Satpam</option>
                                <option>Cleaning Service</option>
                                <option>Administrasi</option>
                                <option>Driver</option>
                                <option>Teknisi</option>
                                <option>Helper</option>
                                <option>Operator</option>
                            </select>
                        </div>


                        {{-- DATA FOTO FOTO --}}
                        <div class="form-group">
                            <label for="exampleInputFile">Foto Kartu Keluarga</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto KTA</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto NPWP</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Pas Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto KTP</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="Dashboard" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
