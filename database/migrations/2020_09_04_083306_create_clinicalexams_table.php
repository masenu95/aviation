<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicalexams', function (Blueprint $table) {
            $table->id();
            $table->string('headneck');
            $table->string('entsystem');
            $table->string('ophthalmology');
            $table->string('chest');
            $table->string('cardio');
            $table->string('abdomen');
            $table->string('anus');
            $table->string('endocrine');
            $table->string('psychlatric');
            $table->string('neurological');
            $table->string('skin');
            $table->string('musculoskeletal');
            $table->string('general');
            $table->string('identifying');
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
        Schema::dropIfExists('clinicalexams');
    }
}
