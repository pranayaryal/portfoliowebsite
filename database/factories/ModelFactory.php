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
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'product_name' => $faker->name,
        'price' => $faker->randomNumber(),
        'image_path' => 'img/sunburst.png',
        'url' => function ()
        {
            return factory(App\Product::class)->createUrl();
        }
    ];
});





