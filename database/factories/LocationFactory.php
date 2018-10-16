<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Location::class, function (Faker $faker) {
    $floor = array('Térreo', 'Superior');
    return [
        'room_number' => $faker->numberBetween(100,999),
        'name' => $faker->words($qt = 3, $asText = true),
        'phone_number' => $faker->numberBetween(1000 , 9999),
        'block_number' => $faker->numerify('B##'),
        'floor' => $floor[rand(0,1)],
        'in_phone_list' => true,
        'active' => true,

        'manager_id' => function () {
            return factory(App\User::class)->create()->id;
        }


    ];
});
