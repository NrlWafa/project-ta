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

            // Perhitungan
            $table->date('tanggal_lahir');
            $table->enum('usia', ['18-24 Tahun', '25-30 Tahun', '31-50 Tahun'])->nullable();

            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin']);
            $table->enum('agama', ['Islam', 'Kristen/Protestan', 'Katolik', 'Hindu', 'Budha', 'Konghucu']);
            $table->string('alamat_ktp', 100);
            $table->string('alamat_dom', 100);
            $table->string('kel', 100);
            $table->string('kec', 100);
            $table->string('kab_kota', 100);
            $table->string('provinsi', 100);
            $table->string('no_hp')->length(15);
            $table->string('no_telprumah')->length(15)->nullable();
            $table->string('no_ktp')->length(20);

            // Khusus Satpam
            $table->enum('satpam', ['Tidak Ada', 'Gada Pratama', 'Gada Madya', 'Gada Utama'])->nullable();
            $table->enum('tinggi_badan', ['Kurang Dari 160 Cm', '160-185 Cm', 'Lebih Dari 185 Cm'])->nullable();

            $table->integer('berat_badan')->length(15)->nullable();
            $table->enum('uk_baju', ['S', 'M', 'L', 'XL', 'XXL', '3XL', '4XL'])->nullable();
            $table->integer('uk_celana')->length(10)->nullable();
            $table->integer('uk_sepatu')->length(10)->nullable();

            $table->string('nama_pasangan', 100)->nullable();
            $table->string('status_psg', 50)->nullable();
            $table->string('tmp_lahir_psg', 100)->nullable();
            $table->date('tgl_lahir_psg')->nullable();
            $table->string('pekerjaan_psg', 100)->nullable();
            $table->string('alamat_psg', 100)->nullable();
            $table->string('no_hp_psg')->length(15)->nullable();
            $table->string('anak1', 100)->nullable();
            $table->string('anak2', 100)->nullable();
            $table->string('anak3', 100)->nullable();
            $table->string('nama_ayh', 100);
            $table->string('tmp_lahir_ayh', 100);
            $table->date('tgl_lahir_ayh');
            $table->string('pekerjaan_ayh', 100);
            $table->string('alamat_ayh', 100);
            $table->string('no_hp_ayh')->length(15)->nullable();
            $table->string('nama_ibu', 100);
            $table->string('tmp_lahir_ibu', 100);
            $table->date('tgl_lahir_ibu');
            $table->string('pekerjaan_ibu', 100);
            $table->string('alamat_ibu', 100);
            $table->string('no_hp_ibu')->length(15)->nullable();
            $table->enum('gol_dar', ['A', 'B', 'AB', 'O'])->nullable();

            // Perhitungan 
            $table->enum('pend_formal', ['SLTA', 'D3', 'S1', 'S2', 'S3']);

            $table->string('tmp_pend', 100);
            $table->integer('thn_pend')->length(20);
            $table->string('jurusan_pend', 100);

            // Perhitungan
            $table->enum('pend_nonformal', ['Ada', 'Tidak Ada'])->nullable();

            $table->string('tmp_pend_non', 100)->nullable();
            $table->integer('thn_pend_non')->length(20)->nullable();
            $table->string('jurusan_pend_non', 100)->nullable();
            $table->string('nama_perusahaan', 100)->nullable();
            $table->string('bidang_usaha', 100)->nullable();
            $table->string('jabatan', 100)->nullable();
            $table->integer('tahun_masuk')->length(20)->nullable();
            $table->string('alasan_keluar', 100)->nullable();

            // Perhitungan
            $table->enum('lama_kerja', ['0 Bulan', '1-6 Bulan', '7-12 Bulan', '13-18 Bulan', '19-24 Bulan']);

            // Perhitungan Admin, Teknisi, Helper, Operator
            $table->enum('komp', ['Ya', 'Tidak'])->nullable();

            // Perhitungan khusus draiver
            $table->enum('sim', ['A', 'B1', 'B2', 'B3', 'C'])->nullable();

            $table->string('riwayat_penyakit', 100)->nullable();
            $table->enum('rs', ['YA', 'TIDAK']);
            $table->integer('lama_dirawat')->length(20)->nullable();
            $table->string('bahasa_dikuasai', 50)->nullable();
            $table->string('organisasi', 100)->nullable();
            $table->string('nm_kontak', 100);
            $table->string('no_kontak')->length(15);
            $table->string('hubungan', 50);
            $table->string('no_npwp')->length(20)->nullable();
            $table->string('no_bpjs_ket')->length(20)->nullable();
            $table->string('no_bpjs_kes')->length(20)->nullable();
            $table->enum('jabatan_lamaran', ['Satpam', 'Cleaning Service', 'Administrasi', 'Driver', 'Helper', 'Teknisi', 'Operator']);
            $table->string('foto_ktp', 100);
            $table->string('foto_kk', 100);
            $table->string('foto_kta', 100)->nullable();
            $table->string('foto_npwp', 100)->nullable();
            $table->string('pas_foto', 100)->nullable();
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
