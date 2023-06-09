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
        Schema::create('helper', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelamar')->length(11);

            // $table->foreignId('id_pelamar')->constrained('pelamar');
            // $table->unsignedBigInteger('id_pelamar');
            // $table->foreign('id_pelamar')
            //     ->references('id')
            //     ->on('pelamar')
            //     ->onDelete('cascade');
            $table->enum('pend_formal', ['SLTA', 'D3', 'S1', 'S2', 'S3']);
            $table->enum('pend_nonformal', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('usia', ['18-24 Tahun', '25-30 Tahun', '31-35 Tahun'])->nullable();
            $table->enum('lama_kerja', ['0 Bulan', '1-6 Bulan', '7-12 Bulan', '13-18 Bulan', '19-24 Bulan'])->nullable();
            $table->enum('komp', ['Ya', 'Tidak'])->nullable();
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
        Schema::dropIfExists('helper');
    }
};
