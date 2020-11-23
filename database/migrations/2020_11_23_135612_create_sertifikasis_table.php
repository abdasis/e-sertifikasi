<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan', 100)->nullable();
            $table->string('id_sertifikasi', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('standard', 100)->nullable();
            $table->string('submit', 100)->nullable();
            $table->string('surveilance_1', 100)->nullable();
            $table->string('surveilance_2', 100)->nullable();
            $table->string('expired', 100)->nullable();
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
        Schema::dropIfExists('sertifikasis');
    }
}
