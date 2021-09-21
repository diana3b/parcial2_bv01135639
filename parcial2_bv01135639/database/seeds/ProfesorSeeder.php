<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesors')->insert([
            'nombre' => 'Jason',
            'apellido' => 'Momoa',
            'dui' => '08474845-9',
            'telefono' => 1837474488,
            'correo' => 'momoa@gmail.com',
            'clave' => bcrypt('jason')
        ]);
    }
}
