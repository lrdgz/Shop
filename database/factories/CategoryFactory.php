<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->unique()->name;
    return [
        'nombre' => $name,
        'slug' => $faker->slug($name),
        'descripcion' => $faker->paragraph(1,true),
    ];
});
