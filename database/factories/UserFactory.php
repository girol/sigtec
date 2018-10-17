<?php

use Faker\Generator as Faker;

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

// Cria como padrão um funcionário
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'num_usp' => $faker->numberBetween(10000, 99999),
        'phone_number' => $faker->numberBetween(1000, 9999),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'active' => 1,
        'job_titles_id' => 2,

    ];
});

// Docente State
$factory->state(App\User::class, 'docente', [
    'job_titles_id' => 1,
]);

