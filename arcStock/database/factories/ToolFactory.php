<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tool;
use Faker\Generator as Faker;

$factory->define(Tool::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'type' => array_rand(['unique', 'disposable'], 1),
        'number' => rand(1, 50),
    ];
});
