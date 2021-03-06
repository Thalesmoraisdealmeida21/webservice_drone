<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Residencias::class, function (Faker\Generator $faker) {
    return [
        'RD_RUA' => $faker->streetName,
        'RD_BAIRRO' => $faker->streetAddress,
        'RD_NUMERO' => $faker->streetSuffix,
        'RD_MUNICIPIO' => $faker->city,
        'RD_DTUCOLETA' => $faker->dateTimeThisMonth
    ];
});


$factory->define(App\Coletas::class, function (Faker\Generator $faker) {
    return [
        'CL_DATA' => $faker->dateTimeThisMonth,
        'CL_CONSUMO' => $faker->streetSuffix,
        'CL_MES' => $faker->month,
    ];
});

