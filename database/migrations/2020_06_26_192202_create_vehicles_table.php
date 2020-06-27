<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('vehicle_id');
            $table->timestamps();
            $table->unsignedBigInteger('vehicle_id_type');
            $table->foreign('vehicle_id_type')->references('type_id')->on('types');
            $table->string('vehicle_license_plate')->unique();
            $table->unsignedBigInteger('vehicle_id_color');
            $table->foreign('vehicle_id_color')->references('color_id')->on('colors');
            $table->unsignedBigInteger('vehicle_id_brand');
            $table->foreign('vehicle_id_brand')->references('brand_id')->on('brands');
            $table->unsignedBigInteger('vehicle_id_owner');
            $table->foreign('vehicle_id_owner')->references('owner_id')->on('owners');
            $table->unsignedBigInteger('vehicle_id_driver');
            $table->foreign('vehicle_id_driver')->references('driver_id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
