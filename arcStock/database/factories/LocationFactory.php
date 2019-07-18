<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Location;
use App\Tool;
use App\Person;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'created_at' => now(),
        'tool_id' => Tool::all()->random()->id,
        'person_id' => Person::all()->random()->id,
        'isOver' => rand(0, 1),
    ];
});
