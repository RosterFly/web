<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('flight_number');
            $table->string('aircraft');
            $table->string('acft_registration');
            $table->dateTime('etd');
            $table->dateTime('eta');
            $table->string('ICAOdeparture');
            $table->string('ICAOarrival');
            $table->integer('distance');
            $table->integer('passengers');
            $table->integer('cargo');
            $table->integer('fob');
            $table->integer('user_id');
            $table->timestamps();
            $table->foreign('aircraft')->references('ICAOCode')->on('aircraft_models');
            $table->foreign('ICAOdeparture')->references('icao')->on('airports');
            $table->foreign('ICAOarrival')->references('icao')->on('airports');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
