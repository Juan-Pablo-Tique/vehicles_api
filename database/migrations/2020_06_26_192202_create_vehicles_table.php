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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id')->on('types');
            $table->string('license_plate')->unique();
            $table->unsignedBigInteger('id_color');
            $table->foreign('id_color')->references('id')->on('colors');
            $table->unsignedBigInteger('id_brand');
            $table->foreign('id_brand')->references('id')->on('brands');
            $table->unsignedBigInteger('id_owner');
            $table->foreign('id_owner')->references('id')->on('owners');
            $table->unsignedBigInteger('id_driver');
            $table->foreign('id_driver')->references('id')->on('drivers');
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
