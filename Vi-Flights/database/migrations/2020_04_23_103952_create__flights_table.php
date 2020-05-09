<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    public function up()
    {
        Schema::create('Flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flight_number');
            $table->unsignedBigInteger('origin_airport');
            $table->unsignedBigInteger('destination_airport');
            $table->time('boarding_time')->nullable();
            $table->time('departure_time')->nullable();
            $table->time('arrival_time')->nullable();
            $table->string('boarding_gate')->nullable();
            $table->string('arrival_gate')->nullable();
            $table->string('status');
            $table->integer('occupied_seats')->default(0);
            $table->date('flight_date');
            $table->time('flight_time');
            $table->string('category');
            $table->string('travel');
            $table->unsignedBigInteger('plane_id');
            $table->unsignedBigInteger('commander_id');
            $table->unsignedBigInteger('co_pilot_id');
            $table->foreign('origin_airport')->references('id')->on('airports');
            $table->foreign('destination_airport')->references('id')->on('airports');
            $table->foreign('plane_id')->references('id')->on('planes');
            $table->foreign('commander_id')->references('id')->on('pilots');
            $table->foreign('co_pilot_id')->references('id')->on('pilots');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Flights');
    }
}
