<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agence;
use Faker\Generator as Faker;

$factory->define(Agence::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'ville' => $faker->city,
        'adresse' => $faker->streetAddress,
        'devise' => $faker->text,
        'tel' => $faker->phoneNumber,
        'fix' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->url,
        'num_contrat' => $faker->text,
        'image' => $faker->imageUrl,
    ];
});
