<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemberangkatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemberangkatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_biodata')->constrained('biodatas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_kapal')->constrained('kapals')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_pemberangkatan');
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
        Schema::dropIfExists('pemberangkatans');
    }
}
