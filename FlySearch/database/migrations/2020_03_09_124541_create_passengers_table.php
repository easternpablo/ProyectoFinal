<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration
{
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dni',9)->unique();
            $table->string('name',50);
            $table->string('lastname',60);
            $table->string('bank_account')->unique();
            $table->string('phone')->unique();
            $table->string('mail',30)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('passengers');
    }
}
