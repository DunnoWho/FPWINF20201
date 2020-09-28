<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->seed(0);
        for ($i = 0; $i < 10; $i++) {
            DB::table('dosen')->insert([
                'kode' => "D" . str_pad($i, 3, "0", STR_PAD_LEFT),
                'nama' => $faker->name,
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
