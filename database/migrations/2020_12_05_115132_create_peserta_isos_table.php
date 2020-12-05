<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaIsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_isos', function (Blueprint $table) {
            $table->id();
            $table->string('standar_sertifikasi', 100)->nullable();
            $table->string('status_permohonan', 100)->nullable();
            $table->string('nama_perusahaan', 100)->nullable();
            $table->longText('alamat_perusahaan')->nullable();
            $table->string('telepon', 100);
            $table->string('email', 100)->nullable();
            $table->string('jumlah_karyawan', 100)->nullable();
            $table->string('jumlah_sift', 100);
            $table->string('jumlah_divisi', 100)->nullable();
            $table->string('ruang_lingkup', 100)->nullable();
            $table->string('nama_perwakilan', 100)->nullable();
            $table->string('jabatan', 100)->nullable();
            $table->string('telepon_perwakilan', 100)->nullable();
            $table->string('email_perwakilan', 100)->nullable();
            $table->string('bidang_usaha', 100)->nullable()->default('text');
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
        Schema::dropIfExists('peserta_isos');
    }
}
