<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirportsTable extends Migration
{
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iata')->unique();
            $table->string('oaci')->unique();
            $table->string('name')->unique();
            $table->string('coordinates');
            $table->string('type')->nullable();
            $table->string('owner')->nullable();
            $table->string('operator')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
