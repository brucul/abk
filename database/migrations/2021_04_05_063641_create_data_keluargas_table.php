<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keluargas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_biodata')->constrained('biodatas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('hubungan');
            $table->string('nama_lengkap');
            $table->string('usia');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('urutan_keluarga');
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
        Schema::dropIfExists('data_keluargas');
    }
}
