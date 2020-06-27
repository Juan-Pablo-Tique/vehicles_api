<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('driver_id');
            $table->timestamps();
            $table->string('driver_identification_number')->unique();
            $table->string('driver_first_name');
            $table->string('driver_second_name');
            $table->string('driver_surnames');
            $table->mediumText('driver_direction');
            $table->bigInteger('driver_telephone');
            $table->unsignedBigInteger('driver_id_city');
            $table->foreign('driver_id_city')->references('city_id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
