<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Kelas;
use Illuminate\Support\Facades\DB;

class MahasiswaKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = Kelas::all();
        Mahasiswa::all()->each(function ($mhs) use ($kelas) {
            $idKelas = $kelas->random(rand(1, 3))->pluck('id')->toArray();
            foreach ($idKelas as $i) {
                DB::table("mahasiswa_kelas")->insert([
                    "nrp" => $mhs->nrp,
                    "id" => $i,
                    "nilai" => random_int(0, 100),
                ]);
            }
        });
    }
}
