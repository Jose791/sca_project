<?php

use Faker\Generator as Faker;

$factory->define(App\Asylee::class, function (Faker $faker) {
    return [
        

        //   'name' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,
        // 'password'=>bcrypt('123456'), // secret
        // 'type'=>$faker->randomElement(['user', 'admin']),
        // 'remember_token' => str_random(10)


        'cedula'=> $faker->cedula,
        'nombre'=> $faker->nombre,
        'apellido'=> $faker->apellido,
        'sexo'=>$faker->randomElement(['M', 'F']),
        'residencia'=>$faker->residencia,
        'fecha_nac'=>$faker->residencia->date_format(dd/mm/aaaa),
        'condicion_especial'=> $faker->condicion_especial(20),
        'estado'=> $faker->randomElement(['A', 'I'])
    ];
});





 // $table->timestamps();
 //            $table->string('cedula');
 //            $table->string('nombre');
 //            $table->string('apellido');
 //            $table->string('sexo');
 //            $table->string('residencia');
 //            $table->date('fecha_nac');
 //            $table->string('condicion_especial');
 //            $table->string('estado');
