<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudulTaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->seed(3);
        for ($i = 0; $i < 35; $i++) {
            DB::table('judul_ta')->insert([
                'judul' => $faker->catchPhrase,
                'nrp' => 218117000 + $i,
                'id_dosen_pembimbing' => "D" . str_pad($faker->numberBetween(0, 9), 3, "0", STR_PAD_LEFT)
            ]);
        }
    }
}
