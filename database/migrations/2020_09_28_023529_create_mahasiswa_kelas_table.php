<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_kelas', function (Blueprint $table) {
            $table->string("nrp", 9);
            $table->foreign("nrp")->references("nrp")->on("mahasiswa");
            $table->unsignedBigInteger("id");
            $table->foreign("id")->references("id")->on("kelas");
            $table->primary(["nrp", "id"]);
            $table->integer('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_kelas');
    }
}
