<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilotsTable extends Migration
{
    public function up()
    {
        Schema::create('Pilots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pilot_number')->unique();
            $table->string('nif')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->string('email',30)->unique();
            $table->string('phone')->unique();
            $table->string('rank');
            $table->date('birth_date');
            $table->date('license_date');
            $table->string('nationality');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Pilots');
    }
}
