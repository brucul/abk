<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('status_pernikahan');
            $table->date('tanggal_lahir');
            $table->string('kebangsaan');
            $table->string('agama');
            $table->string('no_ktp');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('warna_mata');
            $table->string('warna_rambut');
            $table->string('bentuk_wajah');
            $table->string('ciri_lain');
            $table->longText('alamat');
            $table->string('no_hp');
            $table->string('telepon_darurat');
            $table->string('saudara_kandung');
            $table->string('email');
            $table->string('tinggal_bersama');
            $table->string('status');
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
        Schema::dropIfExists('biodatas');
    }
}
