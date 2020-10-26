<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kelas;
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

$factory->define(Kelas::class, function (Faker $faker) {
    return [
        'matkul' => $faker->word,
        'kelas' => "A",
        "kode_dosen_pengajar" => Dosen::inRandomOrder()->first()->kode
    ];
});
