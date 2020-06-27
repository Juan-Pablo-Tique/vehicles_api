<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('owner_id');
            $table->timestamps();
            $table->string('owner_identification_number')->unique();
            $table->string('owner_first_name');
            $table->string('owner_second_name');
            $table->string('owner_surnames');
            $table->mediumText('owner_direction');
            $table->bigInteger('owner_telephone');
            $table->unsignedBigInteger('owner_id_city');
            $table->foreign('owner_id_city')->references('city_id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
