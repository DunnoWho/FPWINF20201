<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->seed(2);
        for ($i = 0; $i < 10; $i++) {
            DB::table('kelas')->insert([
                'matkul' => $faker->word,
                'kelas' => "X",
                'id_dosen_pengajar' => "D" . str_pad($faker->numberBetween(0, 9), 3, "0", STR_PAD_LEFT)
            ]);
        }
    }
}
