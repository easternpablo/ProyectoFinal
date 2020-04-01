<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAirlines extends Migration
{
    public function up()
    {
        Schema::table('airlines', function (Blueprint $table) {
            $table->unsignedBigInteger('airport_id')->after('headquarter');
            $table->foreign('airport_id')->references('id')->on('airports');
        });
    }

    public function down()
    {
        Schema::table('airlines', function (Blueprint $table) {
            //
        });
    }
}
