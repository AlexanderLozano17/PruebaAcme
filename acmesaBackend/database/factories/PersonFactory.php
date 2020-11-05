<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'number_document'=> rand(10000000, 1999999999),
        'first_name'=> $faker->firstName,
        'second_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => 'call 2 f # 38 A 34',
        'telephone' => rand(3000000000, 3999999999),
        'city' => 'NEIVA'  
    ];
});
