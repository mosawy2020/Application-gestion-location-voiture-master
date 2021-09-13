<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assurance;
use Faker\Generator as Faker;

$factory->define(Assurance::class, function (Faker $faker) {
    return [
        //'car_id' => $faker->word,
        'assurance' => $faker->word,
        'num_police' => $faker->randomDigit,
        'date_operation' => $faker->DateTime,
        'date_debut' => $faker->DateTime,
        'duree_mois' => $faker->randomDigit,
        'prix' => $faker->randomDigit,
        'contact_assurance' => $faker->phoneNumber,
        'observation' => $faker->word
    ];
});
