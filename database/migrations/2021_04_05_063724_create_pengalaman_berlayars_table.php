<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengalamanBerlayarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman_berlayars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_biodata')->constrained('biodatas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_perusahaan');
            $table->string('nama_kapal');
            $table->string('tipe_kapal');
            $table->string('bendera');
            $table->string('jabatan');
            $table->date('mulai');
            $table->date('sampai');
            $table->string('alasan_berhenti');
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
        Schema::dropIfExists('pengalaman_berlayars');
    }
}
