<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mahasiswa;
use App\Dosen;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Mahasiswa::class, function (Faker $faker) {
    return [
        'nrp' => $faker->unique()->regexify("21811\d{4}"),
        'nama' => $faker->name,
        "kode_dosen_wali" => Dosen::inRandomOrder()->first()->kode
    ];
});
