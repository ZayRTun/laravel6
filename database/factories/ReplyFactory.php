<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'name' => $faker->name,
        'body' => $faker->sentence
    ];
});
