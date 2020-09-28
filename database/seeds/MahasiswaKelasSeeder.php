<?php

use Illuminate\Database\Seeder;
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
        $faker = Faker\Factory::create();
        $faker->seed(4);
        for ($i = 0; $i < 400; $i++) {
            $x = $faker->unique()->numberBetween(0, 499);
            DB::table('mahasiswa_kelas')->insert([
                'nrp' => 218117000 + floor($x / 10),
                'id' => $x % 10 + 1,
                'nilai' => $faker->numberBetween(30, 90)
            ]);
        }
    }
}
