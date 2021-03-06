<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialtests', function (Blueprint $table) {
            $table->id();
            $table->string('test');
            $table->string('date_performed');
            $table->string('result');
            $table->string('next_due');
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
        Schema::dropIfExists('specialtests');
    }
}
