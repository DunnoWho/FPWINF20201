<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTugasAkhir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tugas_akhir', function (Blueprint $table) {
            $table->foreign("nrp")->references("nrp")->on("mahasiswa");
            $table->foreign("kode_dosen_pembimbing")->references("kode")->on("dosen");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tugas_akhir', function (Blueprint $table) {
            $table->dropForeign(["nrp"]);
            $table->dropForeign(["kode_dosen_pembimbing"]);
        });
    }
}
