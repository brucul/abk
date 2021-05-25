<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_dokumens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_biodata')->constrained('biodatas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ktp')->nullable();
            $table->string('akte')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('buku_nikah')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('skck')->nullable();
            $table->string('bst')->nullable();
            $table->string('paspor')->nullable();
            $table->string('buku_pelaut')->nullable();
            $table->string('pas_foto_putih')->nullable();
            $table->string('pas_foto_biru')->nullable();
            $table->string('mcu')->nullable();
            $table->string('no_ktp');
            $table->date('exp_ktp');
            $table->string('no_akte');
            $table->date('exp_akte');
            $table->string('no_ijasah');
            $table->date('exp_ijasah');
            $table->string('no_bnikah');
            $table->date('exp_bnikah');
            $table->string('no_kk');
            $table->date('exp_kk');
            $table->string('no_skck');
            $table->date('sxp_skck');
            $table->string('no_bst');
            $table->date('exp_bst');
            $table->string('no_paspor');
            $table->date('exp_paspor');
            $table->string('no_pelaut');
            $table->date('exp_pelaut');
            $table->string('no_midikal');
            $table->date('exp_medikal');
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
        Schema::dropIfExists('berkas_dokumens');
    }
}
