<?php

use Illuminate\Database\Seeder;
use App\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $dosen = new Dosen();
        // $dosen->kode = "D0001";
        // $dosen->nama = "Abdul";
        // $dosen->tanggal_lahir = "1980-12-12";
        // $dosen->save();

        // for ($i = 1; $i < 5; $i++) {
        //     $dosen = new Dosen();
        //     $dosen->kode = "D000".$i;
        //     $dosen->nama = "Abdul".$i;
        //     $dosen->tanggal_lahir = "1980-12-0".$i;
        //     $dosen->save();
        // }

        // $faker = Faker\Factory::create();
        // for ($i = 0; $i < 20; $i++) {
        //     $dosen = new Dosen();
        //     $dosen->kode = "D".str_pad($faker->unique()->numberBetween(0,9999), 4, "0");
        //     $dosen->nama = $faker->name;
        //     $dosen->tanggal_lahir = $faker->dateTimeBetween("-70 years", "-30 years");
        //     $dosen->save();
        // }

        factory(App\Dosen::class, 10)->create();
    }
}
