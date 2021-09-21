<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombre' => 'Diana',
        'apellido' => 'Barillas',
        'fechaNacimiento' => '1998-01-03',
        'direccion' => 'La Paz, Zacatecoluca',
        'genero' => 'Femenino',
        'telefono' => 79495966,
        'correo' => 'dianabarillas69@gmail.com',
        'clave' => bcrypt('diana')

    ];
});
