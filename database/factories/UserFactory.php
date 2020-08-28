<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

// Geração aleatória dos clientes do banco Cap
$factory->define(User::class, function (Faker $faker) {
    return [
        'nome'    =>  $faker->name,
        'agencia' =>  $faker->unique()->randomNumber($nbDigits = 5),
        'conta'   =>  $faker->unique()->randomNumber($nbDigits = 8),
        'saldo'   =>  $faker->randomFloat(2, 10, 1000)
    ];
});