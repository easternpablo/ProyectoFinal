<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTable extends Migration
{
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('engines');
            $table->float('length');
            $table->float('wingspan');
            $table->integer('range');
            $table->integer('seats');
            $table->string('routes');
            $table->integer('units');
            $table->string('image');
            $table->string('image2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('planes');
    }
}
