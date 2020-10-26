<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyMahasiswaKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa_kelas', function (Blueprint $table) {
            $table->foreign("nrp")->references("nrp")->on("mahasiswa");
            $table->foreign("id")->references("id")->on("kelas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_kelas', function (Blueprint $table) {
            $table->dropForeign(["nrp"]);
            $table->dropForeign(["id"]);
        });
    }
}
