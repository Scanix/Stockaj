<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Person;
use App\Sector;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'sector_id' => Sector::all()->random()->id,
        'isResponsible' => rand(0, 1),
    ];
});
