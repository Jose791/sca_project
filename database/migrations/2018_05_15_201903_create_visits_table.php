<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('asylee_id')->unsigned();
            $table->integer('visitor_id')->unsigned();
            $table->datetime('fecha_reserva');
            
//            $table->foreign('asylee_id')->references('id')->on('asylees');
//            $table->foreign('visitor_id')->references('id')->on('visitor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
