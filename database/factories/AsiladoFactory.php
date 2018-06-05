<?php

use Faker\Generator as Faker;

$factory->define(App\Asylee::class, function (Faker $faker) {
    return [
        

        'cedula'=>$faker->is_integer()(11),
        'nombre'=>$faker->string(20),
        'apellido'=>$faker->string(20),
        'sexo'=>$faker->randomElement(['M','F']),
        'residencia'=>$faker->string(50),
        'fecha_nac'=>$faker->date(aa\dd\yy),
        'condicion_especial'=>$faker->string(20),
        'estado'=>$faker->randomElement(['A','I'])
    ];
});




