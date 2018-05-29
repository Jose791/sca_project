<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
             $table->integer('asylee_id')->unsigned();
            $table->string('diagnostico');
            
//            $table->foreign('asylee_id')->references('id')->on('asylees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_checks');
    }
}
