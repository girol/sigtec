<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Ticket::class, function (Faker $faker) {
    
    $location = factory(App\Models\Location::class)->create();
    return [
        'reporter_id' => factory(App\User::class)->make()->id, // test
        'summary' => $faker->sentence($words = 6, $variableWords = true),
        'description' => $faker->paragraph($sentences = 4),
        'department_manager_id' => factory(App\User::class)->make()->id,
        'location_manager_id' => $location->manager->id,
        'ticket_status_id' => rand(1,5), // Fixed data
        'location_id' => $location->id,
        'department_id' => rand(1,4), // Fixed data
        'purpose_id' => rand(1,2), // Fixed data
    ];
});
