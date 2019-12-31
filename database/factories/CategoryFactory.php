<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        //
        'nombre'=>substr($faker->sentence(3),0,-1),
        'descripcion'=>($faker->sentence(10))
    ];
});
