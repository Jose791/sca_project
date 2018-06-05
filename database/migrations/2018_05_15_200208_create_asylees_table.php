<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsyleesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asylees', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo');
            $table->string('residencia');
            $table->date('fecha_nac');
            $table->string('condicion_especial');
            $table->string('estado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asylees');
    }
}
