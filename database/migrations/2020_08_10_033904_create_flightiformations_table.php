<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightiformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flightiformations', function (Blueprint $table) {
            $table->id();
            $table->string('licence_no')->unique;
            $table->string('licence_type');
            $table->boolean('type_of_flight');
            $table->string('last_six');
            $table->string('last_twelve');
            $table->string('total');
            $table->string('flying_intended');
            $table->integer('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flightiformations');
    }
}
