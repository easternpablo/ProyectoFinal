<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlinesTable extends Migration
{
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iata');
            $table->string('oaci');
            $table->string('name',100);
            $table->string('main_airport',200);
            $table->string('company',100);
            $table->string('director',100);
            $table->string('headquarter',50);
            $table->string('country',50);
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('airlines');
    }
}
