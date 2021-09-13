<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'matricule' => $faker->word,
        'marque' => $faker->company,
        'modele' => $faker->word,
        'couleur' => $faker->word,
        'puissance' => $faker->randomDigit,
        'vitice' => $faker->randomDigit,
        //'etat' => $faker->word,
      // 'type_carburant' => $faker->word,
       // 'carburant' => $faker->word,
       // 'prixJour' => $faker->randomNumber(),
       // 'disponible' => $faker->randomDigit(0,1), 
        'image' => $faker->imageUrl, 
      //  'places' => $faker->randomDigit,
      //   'portes' => $faker->randomDigit,
      //  'sacs' => $faker->word,
      //  'clima' => $faker->word,
      //  'boitevites' => $faker->word,
    ];
});
