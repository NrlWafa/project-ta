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
        Schema::create('driver', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelamar')->constrained('pelamar');
            $table->enum('pend_formal', ['SLTA', 'D3', 'S1', 'S2', 'S3']);
            $table->enum('pend_nonformal', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('usia', ['18-24 Tahun', '25-30 Tahun', '31-35 Tahun'])->nullable();
            $table->enum('lama_kerja', ['0 Bulan', '1-6 Bulan', '7-12 Bulan', '13-18 Bulan', '19-24 Bulan']);
            $table->enum('sim', ['A', 'B1', 'B2', 'C'])->nullable();
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
        Schema::dropIfExists('driver');
    }
};
