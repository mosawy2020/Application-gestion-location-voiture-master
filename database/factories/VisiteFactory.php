<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\VisiteTechnique;
use Faker\Generator as Faker;

$factory->define(VisiteTechnique::class, function (Faker $faker) {
    return [
       // 'car_id' => $faker->randomDigit,
        'centre' => $faker->word,
        'id_controle' => $faker->randomDigit,
        'n_autorisation' => $faker->randomDigit,
        'date_visite' => $faker->DateTime,
        'date_fin' => $faker->DateTime,
        'duree_mois' => $faker->randomDigit,
        'prix' => $faker->randomDigit,
        'contact_center' => $faker->phoneNumber,
        'observation' => $faker->word
    ];
});
