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
        Schema::create('satpam', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pelamar');
            // Perhitungan 
            $table->enum('pend_formal', ['SLTA', 'D3', 'S1', 'S2', 'S3']);
            // Perhitungan
            $table->enum('pend_nonformal', ['Ada', 'Tidak Ada'])->nullable();

            $table->enum('usia', ['18-24 Tahun', '25-30 Tahun', '31-35 Tahun'])->nullable();
            // Perhitungan
            $table->enum('lama_kerja', ['0 Bulan', '1-6 Bulan', '7-12 Bulan', '13-18 Bulan', '19-24 Bulan']);
            $table->enum('satpam', ['Tidak Ada', 'Gada Pratama', 'Gada Madya', 'Gada Utama'])->nullable();
            $table->enum('tinggi_badan', ['Kurang Dari 160 Cm', '160-185 Cm', 'Lebih Dari 185 Cm'])->nullable();
            $table->double('jarak_c1')->nullable();
            $table->double('jarak_c2')->nullable();
            $table->integer('iterasi')->nullable();
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
        Schema::dropIfExists('satpam');
    }
};
