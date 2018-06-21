<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsyleeMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asylee_medicine', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('asylee_id')->unsigned();
            $table->foreign('asylee_id')->references('id')->on('asylees');
            $table->integer('medicine_id')->unsigned();
            $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->time('hora_medicamento');
            $table->string('complemento');
            
//            $table->foreign('asylee_id')->references('id')->on('asylees');
//            $table->foreign('medicine_id')->references('id')->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asylee_medicine');
    }
}
