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
            $table->string('iata');
            $table->string('oaci');
            $table->string('name',200);
            $table->string('location',200);
            $table->string('coordinates',200);
            $table->string('country',100);
            $table->string('elevation',30);
            $table->string('serve_to',50);
            $table->string('type',25);
            $table->string('owner',100);
            $table->string('operator',100);
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
