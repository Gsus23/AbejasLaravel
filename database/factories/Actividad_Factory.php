<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Actividad;
use Faker\Generator as Faker;

$factory->define(Actividad::class, function (Faker $faker) {
    return [
        'entrada' => $faker->numberBetween($min = 0, $max = 500),
        'salida' => $faker->numberBetween($min = 0, $max = 500),
        'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'hora' => $faker->time($format = 'H:i:s', $max = 'now'),
		'apiario_id' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
