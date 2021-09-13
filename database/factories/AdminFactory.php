<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@gmail.com',
      //  'tel' => '0655212365',
      //  'ville' => 'er-rich',
        'email_verified_at' => now(),
        'password' => Hash::make('admin'), // password
        'remember_token' => Str::random(10),
    ];
});
