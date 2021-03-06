<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_iso', 100)->nullable();
            $table->string('jenis_iso', 100)->nullable();
            $table->string('slug', 100)->nullable();
            $table->longText('diskripsi')->nullable();
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
        Schema::dropIfExists('isos');
    }
}
