<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->seed(1);
        for ($i = 0; $i < 50; $i++) {
            DB::table('mahasiswa')->insert([
                'nrp' => 218117000 + $i,
                'nama' => $faker->name,
                'id_dosen_wali' => "D" . str_pad($faker->numberBetween(0, 9), 3, "0", STR_PAD_LEFT),
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
