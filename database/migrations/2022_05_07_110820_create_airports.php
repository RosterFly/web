<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->string('ident', 4)->primary();
            $table->string('type');
            $table->string('name');
            $table->string('elevation_ft');
            $table->string('continent',2);
            $table->string('iso_country',2);
            $table->string('iso_region');
            $table->string('municipality');
            $table->string('gps_code');
            $table->string('iata_code');
            $table->string('local_code');
            $table->string('coordinates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
