<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Interview::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return \App\User::All()->random();
        },
        'content' => $faker->text(400),
        'seo_title' => $faker->text(20),
        'seo_h1' => $faker->text(20),
        'seo_description' => $faker->text(100)
    ];
});
