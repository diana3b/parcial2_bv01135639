<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->decimal('nota1',8,2);
            $table->decimal('nota2',8,2);
            $table->decimal('nota3',8,2);
            $table->decimal('nota4',8,2);
            $table->decimal('promedio',8,2);
            $table->decimal('parcial',8,2);
            $table->unsignedInteger('alumno_id');
            //$table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->unsignedInteger('curso_id');
            //$table->foreign('curso_id')->references('id')->on('cursos');
            $table->unsignedInteger('profesor_id');
            //$table->foreign('profesor_id')->references('id')->on('profesores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
