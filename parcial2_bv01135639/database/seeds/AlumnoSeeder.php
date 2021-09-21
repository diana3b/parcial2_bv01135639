<?php

use Illuminate\Database\Seeder;
use App\Alumno;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'nombre' => 'Diana',
            'apellido' => 'Barillas',
            'fechaNacimiento' => '1998-01-03',
            'direccion' => 'La Paz, Zacatecoluca',
            'genero' => 'Femenino',
            'telefono' => 79495966,
            'correo' => 'dianabarillas69@gmail.com',
            'clave' => bcrypt('diana')

        ]);
    }
}
