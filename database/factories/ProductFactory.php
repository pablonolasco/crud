<?php

use Faker\Generator as Faker;
use App\Product;
use App\Category;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        //
        'nombre'=>substr($faker->sentence(3),0,-1),
        'descripcion'=>($faker->sentence(10)),
        'precio'=>($faker->randomFloat(2,5,200)),
        'stock'=>($faker->randomDigit()),
        'category_id'=>(Category::all()->random()->id)
    ];
});
