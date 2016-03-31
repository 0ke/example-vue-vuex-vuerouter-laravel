<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Candidate::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'age' => $faker->numberBetween(20, 30),
        'state' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->freeEmail,
        'experience' => $faker->paragraph(1),
        'motivation' => $faker->paragraph(1),
    ];
});

$factory->define(App\Changelog::class, function (Faker\Generator $faker) {
    return [
        'version_id' => $faker->numberBetween(1, 100),
        'changes' => json_encode($faker->paragraphs(3)),
    ];
});
