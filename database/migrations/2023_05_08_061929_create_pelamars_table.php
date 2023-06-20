<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->length(10);
            $table->string('nama_lengkap', 100);
            $table->string('nama_panggilan', 100);
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin']);
            $table->enum('agama', ['Islam', 'Kristen/Protestan', 'Katolik', 'Hindu', 'Budha', 'Konghucu']);
            $table->string('alamat_ktp', 100);
            $table->string('alamat_dom', 100);
            $table->string('kel', 100);
            $table->string('kec', 100);
            $table->string('kab_kota', 100);
            $table->string('provinsi', 100);
            $table->string('no_hp')->length(15);
            $table->string('no_telprumah')->length(15);
            $table->string('no_ktp')->length(20);
            $table->integer('tinggi_badan')->length(15);
            $table->integer('berat_badan')->length(15);
            $table->enum('uk_baju', ['S', 'M', 'L', 'XL', 'XXL', '3XL', '4XL']);
            $table->integer('uk_celana')->length(10);
            $table->integer('uk_sepatu')->length(10);
            $table->string('nama_pasangan', 100);
            $table->string('status_psg', 50);
            $table->string('tmp_lahir_psg', 100);
            $table->date('tgl_lahir_psg');
            $table->string('pekerjaan_psg', 100);
            $table->string('alamat_psg', 100);
            $table->string('no_hp_psg')->length(15);
            $table->string('anak1', 100);
            $table->string('anak2', 100);
            $table->string('anak3', 100);
            $table->string('nama_ayh', 100);
            $table->string('tmp_lahir_ayh', 100);
            $table->date('tgl_lahir_ayh');
            $table->string('pekerjaan_ayh', 100);
            $table->string('alamat_ayh', 100);
            $table->string('no_hp_ayh')->length(15);
            $table->string('nama_ibu', 100);
            $table->string('tmp_lahir_ibu', 100);
            $table->date('tgl_lahir_ibu');
            $table->string('pekerjaan_ibu', 100);
            $table->string('alamat_ibu', 100);
            $table->string('no_hp_ibu')->length(15);
            $table->enum('gol_dar', ['A', 'B', 'AB', 'O']);
            $table->string('pend_formal', 50);
            $table->string('tmp_pend', 100);
            $table->integer('thn_pend')->length(20);
            $table->string('jurusan_pend', 100);
            $table->string('pend_nonformal', 50);
            $table->string('tmp_pend_non', 100);
            $table->integer('thn_pend_non')->length(20);
            $table->string('jurusan_pend_non', 100);
            $table->string('nama_perusahaan', 100);
            $table->string('bidang_usaha', 100);
            $table->string('jabatan', 100);
            $table->integer('tahun_masuk')->length(20);
            $table->string('alasan_keluar', 100);
            $table->string('riwayat_penyakit', 100);
            $table->enum('rs', ['YA', 'TIDAK']);
            $table->integer('lama_dirawat')->length(20);
            $table->string('bahasa_dikuasai', 50);
            $table->string('organisasi', 100);
            $table->string('nm_kontak', 100);
            $table->string('no_kontak')->length(15);
            $table->string('hubungan', 50);
            $table->string('no_npwp')->length(20);
            $table->string('no_bpjs_ket')->length(20);
            $table->string('no_bpjs_kes')->length(20);
            $table->enum('jabatan_lamaran', ['Satpam', 'Cleaning Service', 'Administrasi', 'Driver', 'Helper', 'Teknisi', 'Operator']);
            $table->string('foto_ktp', 100);
            $table->string('foto_kk', 100);
            $table->string('foto_kta', 100);
            $table->string('foto_npwp', 100);
            $table->string('pas_foto', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamar');
    }
};
