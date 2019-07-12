<?php

use App\EventType;
use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        //'image' =>$faker->image,
        'title' => $faker->word,
        'type_id' => random_int(1, EventType::count()),
        'date' => $faker->date,
        'expected_no' => random_int(10, 50),
        'actual_no' => random_int(10, 50),
        'guestspeaker' => $faker->name,
        'eventbudget' => random_int(1000, 5000),
        'status' => 'done',
        'reg_fee' => random_int(100, 500),
        'no_of_days' => random_int(1, 10),
        'description' => $faker->paragraph,
        
    ];
});