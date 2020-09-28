<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DosenSeeder::class,
            MahasiswaSeeder::class,
            KelasSeeder::class,
            JudulTaSeeder::class,
            MahasiswaKelasSeeder::class,
        ]);
    }
}
