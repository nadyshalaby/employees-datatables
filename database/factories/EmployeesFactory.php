<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'position' => $faker->jobTitle,
        'company' => $faker->company,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'bio' => $faker->paragraph,
        'age' => mt_rand(23, 70),
        'salary' => mt_rand(2000, 7000),
        'rate' => mt_rand(1, 5),
    ];
});
