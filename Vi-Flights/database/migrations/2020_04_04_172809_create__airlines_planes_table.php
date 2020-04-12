<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlinesPlanesTable extends Migration
{
    public function up()
    {
        Schema::create('AirlinesPlanes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('airline_id');
            $table->unsignedBigInteger('plane_id');
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->foreign('plane_id')->references('id')->on('planes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('AirlinesPlanes');
    }
}
