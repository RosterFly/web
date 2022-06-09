<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('hangars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('acftregistration');
            $table->string('ICAOCode');
            $table->integer('userid');
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('ICAOCode')->references('ICAOCode')->on('aircraft_models');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hangars');
    }
};
