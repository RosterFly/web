<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airport', function (Blueprint $table) {
            $table->string('icao', 10);
            $table->string('iata', 10)->nullable();
            $table->string('name')->nullable();
            $table->float('latitude', 10, 8);
            $table->float('longitude', 11, 8);
            $table->integer('elevation');
            $table->string('country-iso', 2)->nullable();
            $table->string('city')->nullable();
            $table->primary('icao');
            $table->foreign('country-iso')->references('country_code')->on('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airport');
    }
}
