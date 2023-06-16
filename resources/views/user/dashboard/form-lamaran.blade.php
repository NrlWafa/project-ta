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
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap*</label>
                            <input type="text" class="form-control" name="nama_lengkap"
                                placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>id_user</label>
                            <input type="text" class="form-control" name="id_user" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Nama Panggilan*</label>
                            <input type="text" class="form-control" name="nama_panggilan"
                                placeholder="Masukkan Nama Panggilan">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin*</label>
                            <select class="custom-select rounded-0" name="jenis_kelamin">
                                <option>Pilih Jenis Kelamin</option>
                                <option>Perempuan</option>
                                <option>Laki-laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="tempat_lahir"
                                    placeholder="Masukkan Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir*</label>
                            <div class="input-group">
                                <input type="date" name="tanggal_lahir" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan*</label>
                            <select class="custom-select rounded-0" name="status_perkawinan">
                                <option>Pilih Status Perkawinan</option>
                                <option>Belum Kawin</option>
                                <option>Kawin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Agama*</label>
                            <select class="custom-select rounded-0" name="agama">
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
                            <label>Alamat KTP*</label>
                            <input type="text" class="form-control" name="alamat_ktp"
                                placeholder="Masukkan Alamat Sesuai KTP">
                        </div>
                        <div class="form-group">
                            <label>Alamat Domisili*</label>
                            <input type="text" class="form-control" name="alamat_dom"
                                placeholder="Masukkan Alamat Domisili">
                        </div>
                        <div class="form-group">
                            <label>Kelurahan*</label>
                            <input type="text" class="form-control" name="kel" placeholder="Masukkan Kelurahan">
                        </div>
                        <div class="form-group">
                            <label>Kecamatan*</label>
                            <input type="text" class="form-control" name="kec" placeholder="Masukkan Kecamatan">
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota*</label>
                            <input type="text" class="form-control" name="kab_kota"
                                placeholder="Masukkan Kabupaten/Kota">
                        </div>
                        <div class="form-group">
                            <label>Provinsi*</label>
                            <input type="text" class="form-control" name="provinsi" placeholder="Masukkan Provinsi">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhphone*</label>
                            <input type="text" class="form-control" name="no_hp"
                                placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telp Rumah</label>
                            <input type="text" class="form-control" name="no_telprumah"
                                placeholder="Masukkan Nomor Telp Rumah">
                        </div>
                        <div class="form-group">
                            <label>Nomor KTP*</label>
                            <input type="text" class="form-control" name="no_ktp" placeholder="Masukkan Nomor KTP">
                        </div>
                        <label>KHUSUS FORMASI PEKERJAAN UNTUK SATPAM WAJIB DISI</label>
                        <div class="form-group">
                            <label>Tinggi Badan</label>
                            <input type="text" class="form-control" name="tinggi_badan"
                                placeholder="Masukkan Tinggi Badan Cm">
                        </div>
                        <div class="form-group">
                            <label>Berat Badan</label>
                            <input type="text" class="form-control" name="berat_badan"
                                placeholder="Masukkan Berat Badan Kg">
                        </div>
                        <div class="form-group">
                            <label>Ukuran Baju</label>
                            <select class="custom-select rounded-0" name="uk_baju">
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
                            <input type="text" class="form-control" name="uk_celana"
                                placeholder="Masukkan Ukuran Celana '27,28,..dst'">
                        </div>
                        <div class="form-group">
                            <label>Ukuran Sepatu</label>
                            <input type="text" class="form-control" name="uk_sepatu"
                                placeholder="Masukkan Ukuran Sepatu 'Khusus Satpam'">
                        </div>


                        {{-- DATA PASANGAN --}}
                        <label>DATA PASANGAN HANYA UNTUK YANG SUDAH MENIKAH 'SUAMI/ISTRI'</label>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_pasangan"
                                placeholder="Masukkan Nama Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" name="status_psg"
                                placeholder="Masukkan Status Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tmp_lahir_psg"
                                placeholder="Masukkan Tempat Lahir Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <div class="input-group">
                                <input type="date" name="tgl_lahir_psg" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan_psg"
                                placeholder="Masukkan Pekerjaan Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" class="form-control" name="alamat_psg"
                                placeholder="Masukkan Alamat Lengkap Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhpone</label>
                            <input type="text" class="form-control" name="no_hp_psg"
                                placeholder="Masukkan Nomor Handhpone Pasangan">
                        </div>
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" class="form-control" name="anak1"
                                placeholder="Masukkan Nama Anak Ke-1">
                        </div>
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" class="form-control" name="anak2"
                                placeholder="Masukkan Nama Anak Ke-2">
                        </div>
                        <div class="form-group">
                            <label>Nama Anak</label>
                            <input type="text" class="form-control" name="anak3"
                                placeholder="Masukkan Nama Anak Ke-3">
                        </div>


                        {{-- DATA ORANG TUA (AYAH) --}}
                        <label>DATA ORANG TUA*</label>
                        <div class="form-group">
                            <label>Nama Ayah*</label>
                            <input type="text" class="form-control" name="nama_ayh"
                                placeholder="Masukkan Nama Lengkap Ayah">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir Ayah*</label>
                            <input type="text" class="form-control" name="tmp_lahir_ayh"
                                placeholder="Masukkan Tempat Lahir Ayah">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir Ayah*</label>
                            <div class="input-group">
                                <input type="date" name="tgl_lahir_ayh" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ayah*</label>
                            <input type="text" class="form-control" name="pekerjaan_ayh"
                                placeholder="Masukkan Pekerjaan Ayah">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap Ayah*</label>
                            <input type="text" class="form-control" name="alamat_ayh"
                                placeholder="Masukkan Alamat Lengkap Ayah">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhpone Ayah*</label>
                            <input type="text" class="form-control" name="no_hp_ayh"
                                placeholder="Masukkan Nomor Handhpone Ayah">
                        </div>



                        {{-- DATA ORANG TUA (IBU) --}}
                        <div class="form-group">
                            <label>Nama Ibu*</label>
                            <input type="text" class="form-control" name="nama_ibu"
                                placeholder="Masukkan Nama Lengkap Ibu">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir Ibu*</label>
                            <input type="text" class="form-control" name="tmp_lahir_ibu"
                                placeholder="Masukkan Tempat Lahir Ibu">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir Ibu*</label>
                            <div class="input-group">
                                <input type="date" name="tgl_lahir_ibu" class="form-control"
                                    data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ibu*</label>
                            <input type="text" class="form-control" name="pekerjaan_ibu"
                                placeholder="Masukkan Pekerjaan Ibu">
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap Ibu*</label>
                            <input type="text" class="form-control" name="alamat_ibu"
                                placeholder="Masukkan Alamat Lengkap Ibu">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handhpone Ibu*</label>
                            <input type="text" class="form-control" name="no_hp_ibu"
                                placeholder="Masukkan Nomor Handhpone Ibu">
                        </div>


                        {{-- DATA PRIBADI --}}
                        <label>DATA PELAMAR*</label>
                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <select class="custom-select rounded-0" name="gol_dar">
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
                            <label>Nama Pendidikan Formal*</label>
                            <input type="text" class="form-control" name="pend_formal"
                                placeholder="Masukkan Nama Pendidikan Formal">
                        </div>
                        <div class="form-group">
                            <label>Tempat Pendidikan Formal*</label>
                            <input type="text" class="form-control" name="tmp_pend"
                                placeholder="Masukkan Tempat Pendidikan Formal">
                        </div>
                        <div class="form-group">
                            <label>Tahun Pendidikan*</label>
                            <input type="text" class="form-control" name="thn_pend"
                                placeholder="Masukkan Tahun Pendidikan Formal">
                        </div>

                        <div class="form-group">
                            <label>Jurusan Pendidikan*</label>
                            <input type="text" class="form-control" name="jurusan_pend"
                                placeholder="Masukkan Jurusan Pendidikan Formal">
                        </div>


                        {{-- DATA PENDIDIKAN NON FORMAL --}}
                        <label>DATA PENDIDIKAN NON FORMAL</label>
                        <div class="form-group">
                            <label>Nama Pendidikan Non Formal</label>
                            <input type="text" class="form-control" name="pend_nonformal"
                                placeholder="Masukkan Nama Pendidikan Non Formal">
                        </div>
                        <div class="form-group">
                            <label>Tempat Pendidikan Non Formal</label>
                            <input type="text" class="form-control" name="tmp_pend_non"
                                placeholder="Masukkan Tempat Pendidikan Non Formal">
                        </div>
                        <div class="form-group">
                            <label>Tahun Pendidikan</label>
                            <input type="text" class="form-control" name="thn_pend_non"
                                placeholder="Masukkan Tahun Pendidikan Non Formal">
                        </div>

                        <div class="form-group">
                            <label>Jurusan Pendidikan</label>
                            <input type="text" class="form-control" name="jurusan_pend_non"
                                placeholder="Masukkan Jurusan Pendidikan Non Formal">
                        </div>


                        {{-- DATA PEKERJAAN --}}
                        <label>DATA RIWAYAT PEKERJAAN DIISI JIKA PERNAH BEKERJA SEBELUMNYA</label>
                        <div class="form-group">
                            {{-- PADA DATABASE BELUM DIGANTI NAMANYA MASIH RIWAYAR_PEKERJAAN --}}
                            <label>Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama_perusahaan"
                                placeholder="Masukkan Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <label>Bidang Usaha</label>
                            <input type="text" class="form-control" name="bidang_usaha"
                                placeholder="Masukkan Bidang Usaha">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
                        </div>
                        <div class="form-group">
                            <label>Tahun Masuk</label>
                            <input type="text" class="form-control" name="tahun_masuk"
                                placeholder="Masukkan Tahun Masuk">
                        </div>
                        <div class="form-group">
                            <label>Alasan Keluar</label>
                            <input type="text" class="form-control" name="alasan_keluar"
                                placeholder="Masukkan Alasan Keluar">
                        </div>


                        {{-- DATA RIWAYAT PENYAKIT --}}
                        <div class="form-group">
                            <label>Riwayat Penyakit</label>
                            <input type="text" class="form-control" name="riwayat_penyakit"
                                placeholder="Masukkan Riwayat Penyakit yang Pernah diderita">
                        </div>
                        <div class="form-group">
                            {{-- PADA DATABASE NAMANYA RS --}}
                            <label>Pernah di rawat di Rumah Sakit</label>
                            <select class="custom-select rounded-0" name="rs">
                                <option>Pilih</option>
                                <option>Ya</option>
                                <option>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lama Dirawat</label>
                            <input type="text" class="form-control" name="lama_dirawat"
                                placeholder="Berapa Lama Pernah Dirawat">
                        </div>


                        {{-- DATA PRIBADI --}}
                        <div class="form-group">
                            <label>Bahasa yang DiKuasai</label>
                            <input type="text" class="form-control" name="bahasa_dikuasai"
                                placeholder="Masukkan Bahasa yang Anda Kuasai">
                        </div>
                        <div class="form-group">
                            <label>Organisasi</label>
                            <input type="text" class="form-control" name="organisasi"
                                placeholder="Masukkan Organisasi yang Pernah Diikuti">
                        </div>


                        {{-- DATA KONTAK --}}
                        <label>KONTAK KELUARGA YANG BISA DIHUBUNGI</label>
                        <div class="form-group">
                            <label>Nama Kontak*</label>
                            <input type="text" class="form-control" name="nm_kontak"
                                placeholder="Masukkan Nama Kontak yang Bisa Dihubungi dalam Keadaan Tertentu">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handphone Kontak*</label>
                            <input type="text" class="form-control" name="no_kontak"
                                placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="form-group">
                            <label>Hubungan 'Kekeluargaan Dengan Kontak'*</label>
                            <input type="text" class="form-control" name="hubungan"
                                placeholder="Hubungan Anda Dengan Kentak Sebagai">
                        </div>


                        {{-- DATA PRIBADI --}}
                        <div class="form-group">
                            <label>Nomor NPWP*</label>
                            <input type="text" class="form-control" name="no_npwp" placeholder="Masukkan Nomor NPWP">
                        </div>
                        <div class="form-group">
                            <label>Nomor BPJS Ketenaga Kerjaan*</label>
                            <input type="text" class="form-control" name="no_bpjs_ket"
                                placeholder="Masukkan Nomor BPJS Ketenaga Kerjaan">
                        </div>
                        <div class="form-group">
                            <label>Nomor BPJS Kesehatan*</label>
                            <input type="text" class="form-control" name="no_bpjs_kes"
                                placeholder="Masukkan Nomor BPJS Kesehatan">
                        </div>
                        <div class="form-group">
                            <label>Jabatan yang Dilamar*</label>
                            <select class="custom-select rounded-0" name="jabatan_lamaran">
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
                            <label for="exampleInputFile">Foto Kartu Keluarga*</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto_kk" id="foto_kk"
                                        placeholder="Upload Foto" required>
                                    <label class="custom-file-label">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto KTA*</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto_kta" id="foto_kta"
                                        placeholder="Upload Foto" required>
                                    <label class="custom-file-label">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto NPWP*</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto_npwp" id="foto_npwp"
                                        placeholder="Upload Foto" required>
                                    <label class="custom-file-label">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Pas Foto*</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="pas_foto" id="pas_foto"
                                        placeholder="Upload Foto" required>
                                    <label class="custom-file-label">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto KTP*</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto_ktp" id="foto_ktp"
                                        placeholder="Upload Foto" required>
                                    <label class="custom-file-label">Pilih Foto</label>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="foto" class="form-label">Foto Kartu Keluarga*</label>
                            <input type="file" class="form-control" name="foto_kk" id="foto_kk">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto KTA*</label>
                            <input type="file" class="form-control" name="foto_kta" id="foto_kta">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto NPWP*</label>
                            <input type="file" class="form-control" name="foto_npwp" id="foto_npwp">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Pas Foto*</label>
                            <input type="file" class="form-control" name="pas_foto" id="pas_foto">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto KTP*</label>
                            <input type="file" class="form-control" name="foto_ktp" id="foto_ktp">
                        </div> --}}

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
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        <a href="User" class="btn btn-danger">Batal</a>
                    </div>
                </form>

            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
