<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'nombre' => $name,
        'slug' => $faker->slug($name),
        'category_id' => function(){ return factory(Category::class)->create(); },
        'descripcion_corta' => $faker->text(20),
        'descripcion_larga' => $faker->text(100),
        'especificaciones' =>  $faker->paragraph(3, true),
        'datos_de_interes' => $faker->paragraph(3, true),
        'estado' => $faker->randomElement(['NUEVO', 'EXISTENCIA', 'BAJA EXISTENCIA']),
        'activo' => $faker->randomElement(['Si','No']),
        'sliderprincipal' => $faker->randomElement(['Si','No']),
    ];
});



