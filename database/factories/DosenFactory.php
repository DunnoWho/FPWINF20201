<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

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

$factory->define(Dosen::class, function (Faker $faker) {
    return [
        'kode' => $faker->unique()->regexify("D\d{4}"),
        'nama' => $faker->name,
        'tanggal_lahir' => $faker->dateTimeBetween("-70 years", "-30 years"),
    ];
});
