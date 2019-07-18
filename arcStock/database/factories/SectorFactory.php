<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Sector;
use Faker\Generator as Faker;

$factory->define(Sector::class, function (Faker $faker) {
    return [
        'name' => array_rand(SECTORS, 1),
    ];
});
