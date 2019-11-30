<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormLombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_lombas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lomba_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('lomba_id')->references('id')->on('lombas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_pendaftar');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->integer('kode_pos');
            $table->integer('no_hp');
            $table->string('nama_instansi');
            $table->string('alamat_instansi');
            $table->string('cabang_olahraga');
            $table->string('kategori_olahraga');
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
        Schema::dropIfExists('form_lombas');
    }
}
