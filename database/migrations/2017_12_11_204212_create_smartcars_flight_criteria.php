<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartcarsFlightCriteria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartcars_flight_criteria', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flight_id');
            $table->unsignedInteger('order');
            $table->double('min_latitude', 12, 8)->nullable();
            $table->double('max_latitude', 12, 8)->nullable();
            $table->double('min_longitude', 12, 8)->nullable();
            $table->double('max_longitude', 12, 8)->nullable();
            $table->integer('min_altitude')->nullable();
            $table->integer('max_altitude')->nullable();
            $table->smallInteger('min_groundspeed')->nullable();
            $table->smallInteger('max_groundspeed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smartcars_flight_criteria');
    }
}
