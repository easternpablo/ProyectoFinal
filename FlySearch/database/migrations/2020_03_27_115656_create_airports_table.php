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
            $table->float('elevation');
            $table->string('type');
            $table->string('owner');
            $table->string('operator');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
