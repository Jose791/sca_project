<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsyleeDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asylee_diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('asylee_id')->unsigned();
            $table->integer('disease_id')->unsigned();
            
//            $table->foreign('asylee_id')->references('id')->on('asylees');
//            $table->foreign('disease_id')->references('id')->on('diseases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asylee_diseases');
    }
}
