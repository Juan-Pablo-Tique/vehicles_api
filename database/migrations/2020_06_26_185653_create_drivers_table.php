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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('identification_number')->unique();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('surnames');
            $table->mediumText('direction');
            $table->bigInteger('telephone');
            $table->unsignedBigInteger('id_city');
            $table->foreign('id_city')->references('id')->on('cities');
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
