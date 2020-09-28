<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudulTaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judul_ta', function (Blueprint $table) {
            $table->id();
            $table->string("judul", 255);
            $table->string("nrp", 9);
            $table->foreign("nrp")->references("nrp")->on("mahasiswa");
            $table->string("id_dosen_pembimbing", 4);
            $table->foreign("id_dosen_pembimbing")->references("kode")->on("dosen");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judul_ta');
    }
}
