<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicalexams', function (Blueprint $table) {
            $table->id();
            $table->string('weight');
            $table->string('height');
            $table->string('bmi');
            $table->string('eyecolor');
            $table->string('haircolor');
            $table->integer('doctor_id')->references('id')->on('doctors');
            $table->integer('applicant_id')->references('id')->on('applicants');
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
        Schema::dropIfExists('physicalexams');
    }
}
