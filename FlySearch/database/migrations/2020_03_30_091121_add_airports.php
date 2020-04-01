<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAirports extends Migration
{
    public function up()
    {
        Schema::table('airports', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id')->after('coordinates');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    public function down()
    {
        Schema::table('airports', function (Blueprint $table) {
            //
        });
    }
}
