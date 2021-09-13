<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'cin' => $faker->name,
        'civilite' => $faker->title('male'|'female'),
        'num_permis' => $faker->word,
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'adresse' => $faker->streetAddress,
        'tel' => $faker->phoneNumber,
        'ville' => $faker->city,
      //  'postcode' => $faker->postcode,
        'date_naissance' => $faker->dateTime,
        'date_inscription' => $faker->dateTime,
        'email' => $faker->unique()->safeEmail,
        'image' => $faker->imageUrl,
        'email_verified_at' => now(),
      //  'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
