<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Command;
use App\User;
use App\Car;
use Faker\Generator as Faker;

$factory->define(Command::class, function (Faker $faker) {
    return [
        'user_id'  => App\User::pluck('id')->random(),
        'car_id'   => App\Car::pluck('id')->random(),
        'dateL' => $faker->dateTime(),
        'dateR' => $faker->dateTime(),
        'prixTTC' => $faker->randomDigit(1000,5000),
        'notes' => $faker->text(300),
     //   'NbrJour' => $faker->randomDigit,

    ];
});
