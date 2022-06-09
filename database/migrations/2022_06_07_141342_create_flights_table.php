<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('flightnumber');
            $table->integer('aircraftid');
            $table->dateTime('etd');
            $table->dateTime('eta');
            $table->string('ICAOdeparture');
            $table->string('ICAOarrival');
            $table->integer('passengers')->nullable();
            $table->integer('cargo')->nullable();
            $table->integer('fob')->nullable();
            $table->integer('userid');
            $table->timestamps();
            $table->foreign('aircraftid')->references('id')->on('hangars');
            $table->foreign('ICAOdeparture')->references('icao')->on('airports');
            $table->foreign('ICAOarrival')->references('icao')->on('airports');
            $table->foreign('userid')->references('id')->on('users');

        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
