<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasAkhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_akhir', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->text('abstrak');
            $table->string('nrp', 9);
            $table->string('kode_dosen_pembimbing', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas_akhir');
    }
}
