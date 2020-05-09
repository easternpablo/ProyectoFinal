<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlights extends Migration
{
    public function up()
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->integer('number')->after('id');
        });
    }

    public function down()
    {
        Schema::table('flights', function (Blueprint $table) {
            //
        });
    }
}
